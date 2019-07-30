<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Thông Tin Sinh Viên</h1>
	Mã Sinh Viên: <?=$_SESSION[$_GET['msv']]['msv']?>
	<br>
	Tên Sinh Viên: <?=$_SESSION[$_GET['msv']]['name']?>
	<br>
	Số Điện Thoại: <?=$_SESSION[$_GET['msv']]['sdt']?>
	<br>
	Email: <?=$_SESSION[$_GET['msv']]['email']?>
	<br>
	Địa Chỉ: <?=$_SESSION[$_GET['msv']]['diaChi']?>
</body>
</html>