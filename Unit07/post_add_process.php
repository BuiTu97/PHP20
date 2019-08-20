<?php 
	require_once('connection.php');

	$data = $_POST;

	$target_dir = "images/";  // thư mục chứa file upload

    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
   
    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
     	// nếu upload file không có lỗi 
       	$file_name = basename($_FILES["thumbnail"]["name"]);
        $query = "INSERT INTO posts (title,thumbnail,description,content,slug,view_count,category_id,created_at) VALUES ('".$data['title']."','".$file_name."','".$data['description']."','".$data['content']."','".$data['slug']."','".$data['view_count']."','".$data['category_id']."','".$data['created_at']."')";
         $status = $conn->query($query);
        if($status == TRUE){
          header('Location: posts.php');
        }else{
          echo "Error";
        }
    } else { // Upload file có lỗi 
        echo "Sorry, there was an error uploading your file.";
    }
    
 ?>