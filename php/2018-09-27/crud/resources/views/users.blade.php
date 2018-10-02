<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table">
            <thead>
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Options</th>
            </tr></thead>
            <tbody>
           
            @foreach ($users as $key => $user)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a class="btn btn-primary" href="{{asset("/user/".$user->id)}}">Show</a><a class="btn btn-warning" href="{{asset("/users/edit/".$user->id)}}">Edit</a><a class="btn btn-danger" href="{{asset("/users/remove/".$user->id)}}">Remove</a></td>
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>