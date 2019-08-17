<?php 
	$id =  $_GET['id'];
    require_once('connection.php');
	$query = "SELECT * FROM users WHERE id = ". $id;
	$result = $conn->query($query);
	$users = $result->fetch_assoc(); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DevMind - Education And Technology Group</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 align="center">DevMind - Education And Technology Group</h3>
		<h3 align="center">Add New User</h3>
		<hr>
		<form action="user_edit_process.php" method="POST" role="form" >
			<div class="form-group">
				<label for="">ID</label>
				<input type="text" class="form-control" id="id" placeholder="" name="id" value="<?=$users['id']?>" readonly>
			</div>
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="name" placeholder="" name="name" value="<?=$users['name']?>">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="email" placeholder="" name="email" value="<?=$users['email']?>">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="text" class="form-control" id="password" placeholder="" name="password" value="<?=$users['password']?>">
			</div>
			<div class="form-group">
				<label for="">Avatar</label>
				<input type="text" class="form-control" id="avatar" placeholder="" name="avatar" value="<?=$users['avatar']?>">
			</div>
			<div class="form-group">
				<label for="">Created_at</label>
				<input type="text" class="form-control" id="Created_at" placeholder="" name="created_at" value="<?=$users['created_at']?>">
			</div>
            <button type="submit" class="btn btn-primary" name="submit">Submid</button>
		</form>
	</div>
</body>
</html>