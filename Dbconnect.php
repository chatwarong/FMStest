<?php
    header("Content-Type: text/html; charset=UTF-8");
      
    $host="localhost";
    $user="root"; // MySql Username
    $pass=""; // MySql Password
    $dbname="classroombooking"; // Database Name
  
    $conn=mysqli_connect($host,$user,$pass,$dbname) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้"); // เชื่อมต่อ ฐานข้อมูล
   // echo "DB connect";
    mysqli_set_charset($conn,"utf8"); // กำหนด charset ให้ฐานข้อมูล เพื่ออ่านภาษาไทย
   // mysqli_select_db($dbname,$conn); // เลือกฐานข้อมูล
   
  
?>


