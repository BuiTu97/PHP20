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
	function find($id){
		$conn_obj = new Connection();

		$query = "SELECT * FROM users WHERE id = '".$id."' ";

		$result=$conn_obj->conn->query($query);

		$user= $result->fetch_assoc();

		return $user;
	}
}
?>