<?php 
    require_once('connection.php');

    $query = "SELECT * FROM posts";

    $result = $conn->query($query);

    $posts = array();

    while ($row = $result->fetch_assoc()) {
       $posts[] = $row;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="post_add.php" class="btn btn-primary">Add New Post</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Content</th>
                <th>Slug</th>
                <th>View_Count</th>
                <th>User_id</th>
                <th>Category_id</th>
                <th>Created_at</th>
                <th>Action</th>
            </thead>
            <?php foreach ($posts as $post) {?>
            <tr>
                <td><?= $post['id'] ?></td>
                <td><?= $post['title'] ?></td>
                <td>
                    <img src="images/<?=$post['thumbnail'] ?>" width="100px" height="100px">
                </td>
                <td><?= $post['description'] ?></td>
                <td><?= $post['content'] ?></td>
                <td><?= $post['slug'] ?></td>
                <td><?= $post['view_count'] ?></td>
                <td><?= $post['user_id'] ?></td>
                <td><?= $post['category_id'] ?></td>
                <td><?= $post['created_at'] ?></td>
                <td>
                    <a href="post.php?slug=<?= $post['slug'] ?>" class="btn btn-primary">Detail</a>
                    <a href="post_edit.php?slug=<?= $post['slug'] ?>" class="btn btn-success">Edit</a>
                    <a href="post_delete.php?slug=<?= $post['slug'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>