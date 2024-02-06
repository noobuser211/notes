<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/register.css" rel="stylesheet">

    <title>{{ $page_title }}</title>
</head>
<body>
    <h1>List of Users</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr><th>ID</th><th>Username</th><th>Email</th><th>Password</th></tr>
        </thead>
        <tbody>
            @if($rows)
                @foreach($rows as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->username}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->password}}</td>
                    </tr>

                @endforeach
            @endif
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <h1>List of Users</h1>
    <div class="container">
        <form method="post" action="{{ route('post_register') }}">
            <div class="form_container">
                @if($errors->all())
                <div class="alert alert-danger text-center">
                    @foreach($errors->all() as $error)
                        {{$error}}<br>
                    @endforeach
                </div>
                @endif

                @csrf
                <div class="input_field">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username">
                </div>

                <div class="input_field">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email">
                </div>

                <div class="input_field">
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password">
                </div>
            </div>
            <br>
            <div class="button_container">
                <input type="submit" value="Submit">
            </div>
        </form>
        <br>
        
    </div>
</body>
</html>