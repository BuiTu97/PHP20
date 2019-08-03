<?php 
	session_start();
	require_once('products.php');
	if(isset($_SESSION['cart'][$_GET['key']])){
		$_SESSION['cart'][$_GET['key']]['number']++;
	}else{
		$_SESSION['cart'][$_GET['key']] = array($_GET['key'] => $products[$_GET['key']],'number'=> 1 );
	}
	// $_SESSION['cart'] = $products[$key];
	// echo "<pre>";
	// print_r($_SESSION['cart']);
	// echo "</pre>";
	// die;
	setcookie('msg','Thêm Sản Phẩm Thành Công',time()+5);
	header('Location: products_table.php'); 
 ?>