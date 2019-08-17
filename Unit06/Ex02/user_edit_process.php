<?php 
$data = $_POST;

require_once('connection.php');

$query = 'UPDATE users SET name = "'.$data['name'].'",email = "'.$data['email'].'", password = "'.$data['password'].'" , avatar ="'.$data['avatar'].'", created_at = "'.$data['created_at'].'" WHERE id = '.$data['id'].'';

$status = $conn->query($query);
if($status){
	header('Location: user.php');
}else{
	echo "false";
}
 ?>