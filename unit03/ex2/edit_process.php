 <?php 	
 	session_start();
 	unset($_SESSION['students']['sv'.$_POST]['id_certain']);
 	$_SESSION['students']['sv'.$_POST['msv']]['msv']=$_POST['msv'];
	$_SESSION['students']['sv'.$_POST['msv']]['name']=$_POST['name'];
	$_SESSION['students']['sv'.$_POST['msv']]['sdt']=$_POST['sdt'];
	$_SESSION['students']['sv'.$_POST['msv']]['email']=$_POST['email'];
	$_SESSION['students']['sv'.$_POST['msv']]['diaChi']=$_POST['diaChi'];

	header('Location: list.php');
  ?>