<?php
require './connect-mysql.php';
$connect = connectDatabase();
$stmt = $connect->prepare("INSERT INTO myDB.users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param('sss', $name, $email, $password);

$name = 'PhongDVH';
$email = 'hongpghong141293@gmail.com';
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
