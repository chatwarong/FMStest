
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
    <form action="login.php" medthod="GET">
        <label>username: </label> <input type="text" size="20px" name="uid">
        <label>password: </label> <input type="text" size="20px" name="pass">
        <input name="submit" type="submit" id="submit" value="เข้าสู่ระบบ">
    </form>

    </body>
</html>
