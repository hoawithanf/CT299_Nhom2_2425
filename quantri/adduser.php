<?php

// echo "xin chao";


require('../db/conn.php');

//lay du lieu tu form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


// echo substr($imgs, 0, -1); exit;

// cau lenh them vao bang
$sql_str = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES 
    (NULL, '$name', 
    '$email', 
    '$password');";

// echo $sql_str;
// exit;

//thuc thi cau lenh
mysqli_query($conn, $sql_str);

//tro ve trang 
header("location: ./listusers.php");
?>