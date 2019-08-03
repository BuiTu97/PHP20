<?php 
	session_start();
	$_SESSION['cart'][$_GET['key']]['number']++;
	header('Location: cart.php');
 ?>