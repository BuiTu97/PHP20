<?php 

$data = $_POST;

require_once('connection.php');

$query = 'INSERT INTO categories (id, name,thumbnail, slug, description, created_at ) VALUES ("'.$data['id'].'","'.$data['name'].'","'.$data['thumbnail'].'","'.$data['slug'].'","'.$data['description'].'","'.$data['created_at'].'")';

$status = $conn->query($query);
if($status){
	header('Location: category_add.php');
}else{
	echo "false";
}

?>