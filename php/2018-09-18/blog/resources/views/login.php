<html>
<body>

<!-- Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?> -->
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dataname = 'myDB';

$connect = mysqli_connect($servername, $username, $password, $dataname);

$sql = 'SELECT * FROM users where email = "'.$_POST["email"].'" and password = "'.$_POST["password"].'"';

$result = mysqli_query($connect,$sql);
if (mysqli_num_rows($result) > 0){
    echo 'Dang nhap thanh cong';
}
else {
    echo 'email chua co';
}
;
?>
</body>
</html>
