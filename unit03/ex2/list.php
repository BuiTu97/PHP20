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
	<h1>DANH SÁCH SINH VIÊN</h1>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Mã Sinh Viên</th>
				<th scope="col">Họ Và Tên</th>
				<th scope="col">Số Điện Thoại</th>
				<th scope="col">Action</th>


			</tr>
		</thead>
		<?php foreach ($_SESSION['students'] as $key => $value): ?>
				<tr>
					<td><?=$_SESSION['students'][$key]['msv']?></td>
					<td><?=$_SESSION['students'][$key]['name']?></td>
					<td><?=$_SESSION['students'][$key]['sdt']?></td>
					<td>
						<a href=" detail.php?msv=<?=$key?>" >Detail</a>
						<a href=" delete.php?msv=<?=$key?>" >Delete</a>
						<a href=" edit.php?msv=<?=$key?>" >Edit</a>
					</td>
				</tr>
		<?php endforeach ?>
	</table>
</body>
</html>