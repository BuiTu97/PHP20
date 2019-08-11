<?php 
	session_start();
	require_once('data.php');
	$code = $_GET['code'];
	
	if(isset($_SESSION['cart'][$code])){
		$_SESSION['cart'][$code]['quantity']++;
	}else{
	$product = $products[$code];
	$product['quantity'] = 1;		
	
	$_SESSION['cart'][$code] = $product;
	}
	header('location: cart.php');
 ?>