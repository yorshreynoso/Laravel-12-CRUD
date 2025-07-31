<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creat user</title>
</head>
<body>
    <form action="/users" method="POST">
        @csrf
        @method('POST')

        <input type="text" name="name" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit">Crear usuario</button>
    </form>
    <a href="{{ route('posts.index') }}">Back to Posts</a>
    
</body>
</html>