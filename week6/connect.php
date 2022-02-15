<?php
$severname = 'localhost';
$username = 'root';
$password = '' ;
$dbname = 'dbemp';

$conn = mysqli_connect($severname,$username,$password,$dbname);
/*
if (!$conn){
    die ("Connection : failed (เชื่อต่อฐานข้อมูล ไม่ สำเร็จ)") . mysqli_connect_error());
} else {
    echo "Connection : OK (เชื่อมต่อฐานข้อมูลสำเร็จ)";
}

mysqli_close($conn); // ปิดฐานข้อมูล
*/
?>