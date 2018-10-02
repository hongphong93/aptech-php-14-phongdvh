<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}} ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table">
            <thead>
            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th></thead>
            <tbody>
            @foreach ($users as $key => $user)
            <tr><td>{{$key + 1}}</td><td>{{$user->name}}</td><td>{{$user->email}}</td><td>{{$user->phone}}</td><td><a class="btn btn-success" href="{{asset('/users/'.$user->id)}}">show</a><a class="btn btn-warning" href="{{asset('/users/'.$user->id.'/edit')}}">edit</a><a class="btn btn-danger" href="{{asset('/users/'.$user->id.'/delete')}}">delete</a></td></tr>
            @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>