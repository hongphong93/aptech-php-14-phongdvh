<?php
require './connect-mysql.php';
$connect = connectDatabase();

$stmt = $connect->prepare('INSERT INTO TABLE myDB.users (name,email,password) values (?,?,?)');
$stmt->bind_param("sssi", $name, $email, $password);

$name = 'PhongDVH';
$email = 'hongphong141293@gmail.com';
$password = '3456789';
$stmt->execute();

$name = 'NamNH';
$email = 'namnh@gmail.com';
$password = '678956789';
$stmt->execute();

$name = 'HuanVHN';
$email = 'huanvhn@gmail.com';
$password = '1234564651';
$stmt->execute();

echo 'insert new data successfully';
$stmt->close();
$connect->close();