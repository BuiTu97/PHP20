<?php 
	session_start();
	$_SESSION[$_GET['msv']] = array('msv' => $_GET['msv'],'name' => $_GET['name'], 'sdt' => $_GET['sdt'], 'email' => $_GET['email'] , 'diaChi'=> $_GET['diaChi']);
	// session_destroy();
 ?>