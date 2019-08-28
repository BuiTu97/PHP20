<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USER</title>
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
            <?php foreach ($users as $user) {?>
                <tr>
                    <td> <?= $user['id'] ?></td>
                    <td> <?= $user['name'] ?></td>
                    <td> <?= $user['email'] ?></td>
                    <td> <?= $user['password'] ?> </td>
                    <td>
                        <img src="<?= $item['avatar'] ?>" width="100px" height="100px">
                    </td>
                    <td> <?= $user['created_at'] ?> </td>

                    <td>
                        <a href="views/user/detail.php?id=<?= $user['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="user_edit.php?id=<?= $item['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
           <?php } ?>
        </table>
    </div>
</body>
</html>