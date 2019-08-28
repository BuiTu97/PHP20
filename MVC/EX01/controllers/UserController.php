<?php 
	require_once('models/User.php');
	class UserController{
		function __construct(){

		}
		function list(){
			$model_obj = new User();
			$users = $model_obj->All();
			require_once('views/user/list.php');

		}
		function detail(){
			$id = $_GET['id'];
			$model_obj = new User();
			$user = $model_obj->find($id);
			require_once('views/user/detail.php');
		}
	}

 ?>