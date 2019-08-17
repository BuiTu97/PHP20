<?php 

$data = $_POST;

require_once('connection.php');

$query = 'INSERT INTO users (id, name,email, password, avatar, created_at ) VALUES ("'.$data['id'].'","'.$data['name'].'","'.$data['email'].'","'.$data['password'].'","'.$data['avatar'].'","'.$data['created_at'].'")';

$status = $conn->query($query);
if($status){
	header('Location: user_add.php');
}else{
	echo "false";
}

?>