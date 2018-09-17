<?php
require './connect-mysql.php';
$connect = connectDatabase();

$sql = "INSERT INTO myDB.users (name, email, password) values ('Do Viet Hong Phong', 'hongphong141293@gmail.com', '3-cai-do-yeu')";




if($connect->query($sql)===true){
    echo 'insert data completed';
}
else {
    echo 'loi roi<br>'. $connect->error;
};
?>