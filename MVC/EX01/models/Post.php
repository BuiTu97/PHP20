<?php 
require_once('connection.php');
class Post{
	function All(){
		$conn_obj = new Connection();

		$query = "SELECT * FROM posts";

		$result = $conn_obj->conn->query($query);

		$posts = array();

		while($row = $result->fetch_assoc()){
			$posts[] = $row;
		}
		return $posts;
	}
}
?>