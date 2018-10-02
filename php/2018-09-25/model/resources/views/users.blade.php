<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
<tr>
<th>
Tên</th>
<th>Email</th></tr>
@foreach($users as $user)
<tr><td>{{$user->name}} </td><td>{{$user->email}} </td></tr>
@endforeach
</table>
</body>
</html>
