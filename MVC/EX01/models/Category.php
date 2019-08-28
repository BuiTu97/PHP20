<?php 
	require_once('connection.php');
	class Category{
		function All(){
			$conn_obj = new Connection();
			$query = "SELECT * FROM categories";

			$result = $conn_obj->conn->query($query);

			$categories = array();

			while($row = $result->fetch_assoc()){
				
				$categories[] = $row; 
			}
			return $categories;
		}
	}  

?>