<?php 
	session_start();
	unset($_SESSION[$_GET['msv']]);
	header('Location: list.php');
 ?>