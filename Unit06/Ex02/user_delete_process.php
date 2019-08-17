<?php 
	$id =  $_GET['id'];
    require_once('connection.php');
	$query = "DELETE FROM users WHERE id = ". $id;
	$result = $conn->query($query);
	if($result==true){
		header('Location: user.php');
 	}else{
 		echo "false";
 	}
 ?>