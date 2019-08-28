<?php 
require_once('connection.php');
class User{
	function All(){
		$conn_obj = new Connection();

		$query = "SELECT * FROM users";

		$result = $conn_obj->conn->query($query);

		$users = array();

		while($row = $result->fetch_assoc()){
			$users[] = $row;
		}
		return $users;
	}
	function find(){
		$conn_obj = new Connection();

		$query = "SELECT * FROM users WHERE id = '".$id."'";

		$users = $conn_obj->conn->query($query)->fetch_assoc();

		return $users;
	}
}
?>