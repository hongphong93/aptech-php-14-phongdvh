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
    <form action="{{asset('/users/'.$user->id)}}" method="post">
    <input type="hidden" type="text" name="_method" value="put">{{csrf_field()}}
    <div class="form-group">
    <label for="name">NAME</label>
    <input class="form-control" type="text" id="name" name="name" value="{{$user->name}}">
    </div>
    <label for="email">Email</label>
    <input class="form-control" type="text" id="email" name="email" value="{{$user->email}}">
    <label for="phone">Phone</label>
    <input class="form-control" type="text" id="phone" name="phone" value="{{$user->phone}}">
    <label for="address">Address</label>
    <input class="form-control" type="text" id="address" name="address" value="{{$user->address}}">
    </div>
    <div class="d-flex justify-content-between w-100 mt-3">
    <button type="submit" class="btn">Save</button>
    <a href="{{asset('users')}}" class="btn btn-primary">Quay về trang chủ</a>
    </div>
    </form>
    
    </div>
        </div>
    </div>
</body>
</html>