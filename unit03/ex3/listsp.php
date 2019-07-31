<?php 
session_start();
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
	<h1>DANH SÁCH SẢN PHẨM</h1>
	<table class="table">
		<thead>
			<tr>
				<!-- <th scope="col">#</th> -->
		

				<th scope="col">Mã Sản Phẩm</th>
				<th scope="col">Tên Sản Phẩm</th>
				<th scope="col">Đơn Giá</th>
				<th scope="col">Action</th>


			</tr>
		</thead>
		<?php foreach ($_SESSION as $key => $value): ?>
			<!-- <tbody> -->
				<tr>
					<!-- <th scope="row">1</th> -->
			

					<td><?=$_SESSION[$key]['msp']?></td>
					<td><?=$_SESSION[$key]['name']?></td>
					<td><?=$_SESSION[$key]['dg']?></td>
					<td>
						<a href=" detail.php?msv=<?=$_SESSION[$key]['msv']?>">Add To Cart</a>
					</td>
				</tr>
			<!-- </tbody> -->
		<?php endforeach ?>
	</table>
</body>
</html>