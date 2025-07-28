<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all users</title>
</head>
<body>
<h1>All Users</h1>
@foreach($users as $user)
    <p>
        Nombre: {{ $user->name }}<br>
        Email: {{ $user->email }}<br>
        Password: {{ $user->password }}<br>
        Created at: {{ $user->created_at }}<br>
    </p>  
@endforeach
<a href="{{ route('posts.index') }}">Back to Posts</a>
    
</body>
</html>