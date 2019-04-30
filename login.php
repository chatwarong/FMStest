<?php
require './Dbconnect.php';
$username = $_GET['uid'];
$pass = $_GET['pass'];
//$p='%' .$pro_search. '%';
//ใช้คำสั่ง sql
$sql="select * from user where username = '$username'and password = '$pass'";
//ส่งคำสั่งไปทำงาน
$result= mysqli_query($conn, $sql);
$record= mysqli_fetch_array($result,MYSQLI_BOTH);
//echo $result[0];
if ($record){
    echo $record['piority'];
    if ($record['piority']="administrators"){
        header("Location: admin.php");
    }else {
    header("Location: app.php");
    } 
}else echo "username หรือ password ผิดพลาด"; 

?>