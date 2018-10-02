<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->name}} </td>
                <td>{{$user->email}} </td>
                <td>{{$user->password}} </td>
                <td><a class="btn btn-warning" href="#">Edit</a><a class="btn btn-danger" href="#">Remove</a></td>
            </tr>
        </tbody>
    </table>
    </div>
        </div>
    </div>
</body>
</html>