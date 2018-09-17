<?php
require './connect-mysql.php';
$connect = connectDatabase();

$sql = 'CREATE TABLE myDB.users (
    id int not null AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email varchar(100) not null UNIQUE,
    password varchar(50),
    createdate datetime not null DEFAULT now()
)';


// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $dataname = 'myDB';

// $connect = mysqli_connect($servername, $username, $password, $dataname);

// $sql = 'CREATE TABLE users (
//     id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50),
//     email varchar(100) NOT NULL,
//     password varchar(50),
//     createdate datetime not null DEFAULT now()
// )';
if ($connect->query($sql)===true){
    echo 'Created table sucessfully';
}
else {
    echo 'Error Creating table:'.$connect->error;
};
?>