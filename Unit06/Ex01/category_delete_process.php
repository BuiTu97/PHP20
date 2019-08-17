<?php 
	$id =  $_GET['id'];
    require_once('connection.php');
	$query = "DELETE FROM categories WHERE id = ". $id;
	$result = $conn->query($query);
	if($result==true){
		header('Location: category.php');
 	}else{
 		echo "false";
 	}
 ?>