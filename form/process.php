<?php  
$userName = $_POST["taikhoan"];
$passWord = $_POST["matkhau"];
$result = ($userName == "admin" && $passWord == "123") ? "Đăng nhập thành công": "Đăng nhập thất bại";
echo $result; 
?>