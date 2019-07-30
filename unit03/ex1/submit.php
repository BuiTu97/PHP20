<?php 
	if(isset($_POST['msv'],$_POST['name'],$_POST['sdt'],$_POST['email'],$_POST['diaChi'])){
		echo "Mã Sinh Viên: " . $_POST['msv'].'<br>';

		echo "Họ Và Tên: " . $_POST['name'].'<br>' ;
		echo "Số Điện Thoại: ".$_POST['sdt'].'<br>';
		echo "Email: ".$_POST['email'].'<br>';
		echo "Địa Chỉ: ".$_POST['diaChi'].'<br>';
	}
 ?>