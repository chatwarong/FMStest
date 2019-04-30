<?php
require './Dbconnect.php';
//ใช้คำสั่ง sql
$sql="select * from productdb";
//ส่งคำสั่งไปทำงาน
$result= mysqli_query($conn, $sql);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
           
    </head>
    <body>
        ADMIN

    </body>
</html>