<?php 
	define('SERVER_NAME', 'localhost');
	define('DATABASE_NAME', 'php_hw');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	$conn = new mysqli( SERVER_NAME, USERNAME, PASSWORD, DATABASE_NAME );
	$conn->set_charset('utf8');
	if($conn->connect_error){
		die('connect failed: ' .$conn->connect_error);
	}
 ?>