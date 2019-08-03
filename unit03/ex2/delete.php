<?php 
	session_start();
	unset($_SESSION['students'][$_GET['msv']]);
	header('Location: list.php');
 ?>