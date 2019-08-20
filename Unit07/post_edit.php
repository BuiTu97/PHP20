<?php 
    require_once('connection.php');

    $query = "SELECT * FROM posts";

    $result = $conn->query($query);

    $posts = array();

    while ($row = $result->fetch_assoc()) {
       $posts[] = $row;
    }

    $slug = $_GET['slug'];

    $query_2 = "SELECT * FROM posts WHERE slug='".$slug."' ";

    $post = $conn->query($query_2)->fetch_assoc();



    $query_3 = "SELECT * FROM categories";

    $result1 = $conn->query($query_3);

    $categories = array();

    while ($row = $result1->fetch_assoc()) {
       $categories[] = $row;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Edit Post</h3>
    <hr>
       <form action="post_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $post['title'] ?>" >
                <input type="hidden" class="form-control" value="<?= $post['id'] ?>" id="" placeholder="" name="id" >

            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <img src="images/<?= $post['thumbnail'] ?>" width="100px" height="100px">
                <input type="file" class="form-control"  id="" placeholder="" name="thumbnail">
            </div>
             <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value = "<?= $post['description'] ?>" >
            </div>
              <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value = "<?= $post['content'] ?>">
            </div>
             <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?= $post['slug'] ?>">
            </div>
             <div class="form-group">
                <label for="">View_Count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count" value="<?= $post['view_count'] ?>" >
            </div>
             <div class="form-group">
                <label for="">Category_id</label>
                <select class="form-control" id="" placeholder="" name="category_id">
                <?php foreach ($categories as $cate_id) {?>
                    <option <?php if($post['category_id'] == $cate_id['id']) echo 'selected'?>> <?= $cate_id['id'] ?></option>
                <?php } ?>
                </select>
            </div>
             <div class="form-group">
                <label for="">Created_at</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?= $post['created_at'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>