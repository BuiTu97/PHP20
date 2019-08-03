<?php 
session_start();
 require_once('products.php');
 require_once('convert.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	td a{
		padding: 5px 10px;
		background-color: blue;
		color: white;
		text-decoration: none;
	}
	td a:hover{
		color: red;
	}
</style>
<body>
	<h1>DANH SÁCH SẢN PHẨM</h1>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Mã Sản Phẩm</th>
				<th scope="col">Tên Sản Phẩm</th>
				<th scope="col">Giá</th>
				<th scope="col">Nhà Xuất Bản</th>
				<th scope="col">Số Lượng</th>
				<th scope="col">Tổng Tiền</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<?php
		$index = 0;
		$sum = 0;
		 foreach ($_SESSION['cart'] as $key => $value){
		 	$index ++;
		 	$subtotal = $_SESSION['cart'][$key]['number']*$_SESSION['cart'][$key][$key]['prices'];
		 	$sum +=$subtotal;
		  ?>
				<tr>
					<td><?=$index?></td>
					<td><?=$_SESSION['cart'][$key][$key]['name']?></td>
					<td><?=$_SESSION['cart'][$key][$key]['prices']?></td>
					<td><?=$_SESSION['cart'][$key][$key]['publisher']?></td>
					<td><?=$_SESSION['cart'][$key]['number']?></td>
					<td><?=number_format($subtotal)?></td>
					<td>
						<a href="minus.php?key=<?=$key?>" >-</a>
						<a href="plus.php?key=<?=$key?>" >+</a>
					</td>
				</tr>
		<?php  } ?>
				<tr>
					<td colspan="4">Tổng Tiền: </td>
					<td><?=number_format($sum)?></td>
				</tr>
				<tr>
					<td colspan="4">Thành Chữ: </td>
					<td><?=convert_number_to_words($sum)?> đồng</td>
				</tr>
			<a href="send_mail_process.php">Place Order</a>
	</table>
	
</body>
</html>