<?php
require './connect-mysql.php';
$connect = connectDatabase();
$sql = 'CREATE DATABASE myDB';
if ($connect->query($sql) === true){
    echo 'Database created successfully';
}
else{
    echo 'Error Creating Database: '. $connect->error;
};
$connect->close();

// $servername = 'localhost';
// $username = 'root';
// $password = '';

// $connect = mysqli_connect($servername, $username, $password);

// // if ($connect){
// //     echo 'ket noi thanh cong';
// // }
// // else {
// //     echo 'loi ket noi';
// // };
// $sql = 'create database myDB';
// if($connect->query($sql) === true){
//     echo 'tao database thanh cong';
// }
// else{
//     echo 'error';
// };
?>
