<?php  
	$mod = isset($_GET['mod'])?$_GET['mod']: 'blog';
	$act = isset($_GET['act'])?$_GET['act']: 'index';

	switch ($mod) {
		case 'category':
			require_once('controllers/CategoryController.php');
			$controllers_obj = new CategoryController();
			switch ($act) {
				case 'list':
					$controllers_obj->list();
					break;
				
				default:
					echo "404";
					break;
			}
			break;
		case 'post':
			require_once('controllers/PostController.php');
			$controllers_obj = new PostController();
			switch ($act) {
				case 'list':
					$controllers_obj->list();
					break;
				
				default:
					echo "404";
					break;
			}
			break;
		case 'user':
			require_once('controllers/UserController.php');
			$controllers_obj = new UserController();
			switch ($act) {
				case 'list':
					$controllers_obj->list();
					break;
				case 'detail':
					$controllers_obj->detail();
					break;
				default:
					echo "404";
					break;
			}
			break;
		default:
					echo "404";
			break;
	}


?>