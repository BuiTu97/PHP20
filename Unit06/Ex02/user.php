<?php 
require_once('connection.php');
$query = "SELECT * from users";


$result = $conn->query($query);
$users  = array();
while($row = $result->fetch_assoc()){
    $users[] = $row;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USERS</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="user_add.php" class="btn btn-primary">Add New USER</a>
        <table class="table">

            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>avatar</th>
                <th>Created_at</th>

                <th>Action</th>
            </thead>
            <?php 
            foreach ($users as $item) {

                ?>
                <tr>
                    <td> <?= $item['id'] ?></td>
                    <td> <?= $item['name'] ?></td>
                    <td> <?= $item['email'] ?></td>
                     <td>
                        <img src="<?= $item['avatar'] ?>" width="100px" height="100px">
                    </td>
                    <td> <?= $item['created_at'] ?> </td>
                    <td>
                        <a href="user_detail.php?id=<?= $item['id'] ?> " class="btn btn-primary">Detail</a>
                        <a href="user_edit.php?id=<?= $item['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="user_delete_process.php?id=<?= $item['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>