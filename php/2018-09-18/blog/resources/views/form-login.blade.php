<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="/2018-09-18/blog/public/login" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Email <input type="text" name="email"><br>
    Password <input type="text" name="password"><br>
    <input type="submit">
    </form>
</body>
</html>