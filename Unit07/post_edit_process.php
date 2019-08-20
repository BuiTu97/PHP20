<?php 
	require_once('connection.php');

	$data = $_POST;

	$target_dir = "images/";  // thư mục chứa file upload

    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
   
    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
     	// nếu upload file không có lỗi 
       	$file_name = basename($_FILES["thumbnail"]["name"]);
        $query = "UPDATE posts SET title = '".$data['title']."',thumbnail = '".$file_name."', description = '".$data['description']."',content = '".$data['content']."', slug = '".$data['slug']."', view_count = '".$data['view_count']."' ,category_id = '".$data['category_id']."', created_at = '".$data['created_at']."' WHERE id =  " .$data['id'];
         
    } else { // Upload file có lỗi 
        $query = "UPDATE posts SET title = '".$data['title']."',description = '".$data['description']."',content = '".$data['content']."', slug = '".$data['slug']."', view_count = '".$data['view_count']."' ,category_id = ".$data['category_id'].", created_at = '".$data['created_at']."' WHERE id =  " .$data['id'];
    }
    $status = $conn->query($query);
        if($status == TRUE){
          header('Location: posts.php');
        }else{
          echo "Error";
        }
    
 ?>