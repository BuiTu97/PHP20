<?php 
	require_once('send_mail.php');
	$data = file_get_contents('email.php');
	send_email('tonyscofield99771@gmail.com','Bùi Ngọc Tú',$data,'Chi tiết đơn hàng');
 ?>