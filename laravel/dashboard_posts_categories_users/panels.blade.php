<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/panel.css" rel="stylesheet">
    <title>Panels</title>
</head>
<body>
    <h1>Panels</h1>
    <main>
        <div class="sidebar">
            <div class="first_item">
                <a href="{{url('panels')}}" class="remove_underline">Dashboard</a>
            </div>
            <div class="second_item">
                <a href="{{url('panels/posts')}}" class="remove_underline">Posts</a>
            </div>
            <div class="third_item">
                <a href="{{url('panels/categories')}}" class="remove_underline">Categories</a>
            </div>
            <div class="fourth_item">
                <a href="{{url('panels/users')}}" class="remove_underline">Users</a>
            </div>
        </div>
        <div class="main">
            <h2>{{ $page_title }}</h2>
        </div>
    </main>
</body>
</html>