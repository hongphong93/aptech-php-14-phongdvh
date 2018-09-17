<?php
require './connect-mysql.php';
$connect = connectDatabase();
$sql ='DROP TABLE myDB.users';
if ($connect->query($sql)=== true){
    echo 'Delete table completed';
}
else{
    echo 'Error deleting table:'.$connect->error;
};
