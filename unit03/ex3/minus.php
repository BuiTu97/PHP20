<?php 
	session_start();
	if($_SESSION['cart'][$_GET['key']]['number'] == 1){
		unset($_SESSION['cart'][$_GET['key']]);
	}else{
		$_SESSION['cart'][$_GET['key']]['number']--;
	}
	header('Location: cart.php')
 ?>