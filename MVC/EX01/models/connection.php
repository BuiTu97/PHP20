<?php 
class Connection{
	var $conn;
	function __construct(){
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$dbname = 'home_work';

		$this->conn = new mysqli($servername, $username, $password, $dbname);
		$this->conn->set_charset('utf8');
		if($this->conn->connect_error){
			die("connection failed: ".$this->conn->connect_error);
		} 
	}
}

?> 