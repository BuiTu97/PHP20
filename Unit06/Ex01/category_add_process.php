<?php 

$data = $_POST;

require_once('connection.php');

$query = 'INSERT INTO categories (id, name, parent_id, thumbnail, slug, description, created_at ) VALUES ("'.$data['id'].'","'.$data['name'].'","'.$data['parent_id'].'","'.$data['thumbnail'].'","'.$data['slug'].'","'.$data['description'].'","'.$data['created_at'].'")';
echo "<pre>";
	print_r($query);
echo "</pre>";
$status = $conn->query($query);
if($status){
	header('Location: category_add.php');
}else{
	echo "false";
}

?>