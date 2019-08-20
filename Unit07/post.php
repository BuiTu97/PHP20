<?php 
	require_once('connection.php');

	$slug = $_GET['slug'];

	// echo "$id";
	// die;

	$query = "SELECT * FROM posts WHERE slug='".$slug."' ";

	$post = $conn->query($query)->fetch_assoc();

	// print_r($post);

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Post Detail</h3>
    <hr>
        <form action="post_add_process.php" method="GET" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="id" readonly  value="<?= $post['id']?> ">
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" readonly value="<?= $post['title']?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <img src="images/<?= $post['thumbnail'] ?>" width="100px" height="100px">
                <!-- <input type="file" class="form-control"  id="" placeholder="" name="thumbnail"> -->
            </div>
             <div class="form-group">
                <label for="">Description</label>
                <textarea type="text" class="form-control" id="" placeholder="" name="description" readonly value=""><?= $post['description']?></textarea>
            </div>
              <div class="form-group">
                <label for="">Content</label>
                <textarea type="text" class="form-control" id="" placeholder="" name="content" readonly value="" height= "200px">
                	<?= $post['content']?>
                </textarea>
            </div>
             <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" readonly value="<?= $post['slug']?>">
            </div>
             <div class="form-group">
                <label for="">View_Count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count" readonly value="<?= $post['view_count']?>">
            </div>
             <div class="form-group">
                <label for="">User_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="user_id" readonly value="<?= $post['user_id']?>">
            </div>
             <div class="form-group">
                <label for="">Category_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_id" readonly value="<?= $post['category_id']?>">
            </div>
             <div class="form-group">
                <label for="">Created_at</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" readonly value="<?= $post['created_at']?>">
            </div>
        </form>
    </div>
</body>
</html>
