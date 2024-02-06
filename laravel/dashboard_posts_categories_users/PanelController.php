<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function dashboard() {
        return view('panels.panels', ['page_title' => 'Dashboard']);
    }

    public function posts() {
        return view('panels.panels', ['page_title' => 'Posts']);
    }

    public function categories() {
        return view('panels.panels', ['page_title' => 'Categories']);
    }

    public function users() {
        return view('panels.panels', ['page_title' => 'Users']);
    }
}
