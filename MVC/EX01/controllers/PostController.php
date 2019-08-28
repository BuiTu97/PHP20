<?php 
	require_once('models/Post.php');
	class PostController{
		function __construct(){

		}
		function list(){
			$model_obj = new Post();
			$posts = $model_obj->All();
			require_once('views/post/list.php');
		}
	}
 ?>