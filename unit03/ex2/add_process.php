<?php 
	session_start();
	// $_SESSION[$_GET['msv']] = array('msv' => $_GET['msv'],'name' => $_GET['name'], 'sdt' => $_GET['sdt'], 'email' => $_GET['email'] , 'diaChi'=> $_GET['diaChi']);
	// session_destroy();
	$_SESSION['students']['sv'.$_POST['msv']]['msv']=$_POST['msv'];
	$_SESSION['students']['sv'.$_POST['msv']]['name']=$_POST['name'];
	$_SESSION['students']['sv'.$_POST['msv']]['sdt']=$_POST['sdt'];
	$_SESSION['students']['sv'.$_POST['msv']]['email']=$_POST['email'];
	$_SESSION['students']['sv'.$_POST['msv']]['diaChi']=$_POST['diaChi'];
	header('location: list.php');
	
 ?>