<?php 
	session_start();
	$code = $_GET['code'];
	if($_SESSION['cart'][$code]['quantity']>1){
		$_SESSION['cart'][$code]['quantity']--;

	}else{
		unset($_SESSION['cart'][$code]);
	}
	
	header('location: cart.php');
 ?>