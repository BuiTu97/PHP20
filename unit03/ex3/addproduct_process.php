<?php 
	session_start();
	$_SESSION[$_GET['msp']] = array('msp' => $_GET['msp'],'name' => $_GET['name'], 'dg' => $_GET['dg']);
	// session_destroy();
 ?>