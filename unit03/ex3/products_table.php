<?php 
session_start();
 require_once('products.php');
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
				<th scope="col">Action</th>


			</tr>
		</thead>
		<?php
		$index = 0;
		 foreach ($products as $key => $value){
		 	$index ++;
		  ?>
				<tr>
					<td><?=$index?></td>
					<td><?=$products[$key]['name']?></td>
					<td><?=$products[$key]['prices']?></td>
					<td><?=$products[$key]['publisher']?></td>
					<td>
						<a href="products_add_process.php?key=<?=$key?>" >Add To Cart</a>
					</td>
				</tr>
		<?php  } ?>
	</table>
	<?php 
		if(isset($_COOKIE['msg'])){
			echo $_COOKIE['msg'].'<br>';
		}
	 ?>
	<a href="cart.php?key=<?=$key?>"> View Cart</a>
</body>
</html>