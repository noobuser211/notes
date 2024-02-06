<?php

namespace App\Http\Controllers;

use App\Models\register;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\UserController;


class UserController extends Controller
{
    public function get_register() {
        $query = "SELECT * FROM register";
        $rows = DB::select($query);

        $data['rows'] = $rows;
        $data['page_title'] = 'Registry of Users';

        return view('users.register', $data);
    }

    public function post_register(Request $req) {
        $register = new register();

        $validated = $req->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data['username'] = $req->input('username');
        $data['email'] = $req->input('email');
        $data['password'] = $req->input('password');

        $register->insert($data);

        print_r($data);

        return redirect('register');
    }
}
