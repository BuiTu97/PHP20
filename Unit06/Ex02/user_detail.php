
<?php 
	$id =  $_GET['id'];
    require_once('connection.php');
	$query = "SELECT * FROM users WHERE id = ". $id;
	$result = $conn->query($query);
	$users = $result->fetch_assoc(); 
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
        <h3 class="text-center">--- USERS ---</h3>
        <a href="category_add.php" class="btn btn-primary">Add New User</a>
        <table class="table">

            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Avatar</th>
                <th>Created_at</th>

                <th>Action</th>
            </thead>
                <tr>
                    <td> <?= $users['id'] ?></td>
                    <td> <?= $users['name'] ?></td>
                    <td> <?= $users['email'] ?></td>
                    <td> <?= $users['password'] ?> </td>
                    <td>
                        <img src="<?= $item['avatar'] ?>" width="100px" height="100px">
                    </td>
                    <td> <?= $users['created_at'] ?> </td>

                    <td>
                        <a href="user_edit.php?id=<?= $item['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

        </table>
    </div>
</body>
</html>