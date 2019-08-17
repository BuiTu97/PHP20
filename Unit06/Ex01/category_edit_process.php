<?php 
$data = $_POST;

require_once('connection.php');

$query = 'UPDATE categories SET name = "'.$data['name'].'",thumbnail = "'.$data['thumbnail'].'", slug = "'.$data['slug'].'" , description ="'.$data['description'].'", created_at = "'.$data['created_at'].'" WHERE id = '.$data['id'].'';

$status = $conn->query($query);
if($status){
	header('Location: category.php');
}else{
	echo "false";
}
 ?>