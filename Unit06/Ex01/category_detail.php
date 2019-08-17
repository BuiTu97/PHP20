
<?php 
	$id =  $_GET['id'];
    require_once('connection.php');
	$query = "SELECT * FROM categories WHERE id = ". $id;
	$result = $conn->query($query);
	$categories = $result->fetch_assoc(); 
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="category_add.php" class="btn btn-primary">Add New Category</a>
        <table class="table">

            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Created_at</th>

                <th>Action</th>
            </thead>
           
                <tr>
                    <td> <?= $categories['id'] ?></td>
                    <td> <?= $categories['name'] ?></td>
                    <td>
                        <img src="<?= $item['thumbnail'] ?>" width="100px" height="100px">
                    </td>
                    <td> <?= $categories['slug'] ?></td>
                    <td> <?= $categories['description'] ?> </td>
                    <td> <?= $categories['created_at'] ?> </td>

                    <td>
                        <a href="category_edit.php?id=<?= $item['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="category_delete_process.php?id=<?= $item['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

        </table>
    </div>
</body>
</html>