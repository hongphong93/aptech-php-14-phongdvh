<?php
function connectDatabase($servername = 'localhost', $username = 'root', $password = ''){
    $connect = mysqli_connect($servername, $username, $password);
    if ($connect->connect_error){
        return die('Connect Failed :'. $connect->connect_error);
    }else{
        return $connect;
    };
};
// $servername = 'localhost';
// $username = 'root';
// $password = '';

// $connect = mysqli_connect($servername, $username, $password);

// if ($connect){
//     echo 'ket noi thanh cong';
// }
// else {
//     echo 'loi ket noi';
// };