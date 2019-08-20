<?php 
	require_once('connection.php');

	$slug = $_GET['slug'];

	$query = "DELETE FROM posts WHERE slug='".$slug."' ";

	$status = $conn->query($query);

	if($status == TRUE){
		header('Location: posts.php');
	}else{
		echo "Error";
	}
	
 ?>