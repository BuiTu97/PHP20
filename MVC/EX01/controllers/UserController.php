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
		function detail($id){
			$id = $_GET['id'];
			$model_obj = new User($id);
			$user = $model_obj->find();
			require_once('views/post/detail.php');
		}
	}

 ?>