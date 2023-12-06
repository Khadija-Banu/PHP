<?php
  include 'connect.php';
 $sql="select * from crud";
$statement=$pdo->query($sql);
$users=$statement->fetchAll(PDO::FETCH_ASSOC);


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container my-5">
        <div class="card">
            <div class="card-header">User list <a href="user.php" class="btn btn-primary ms-5 btn-sm">Create new user</a></div>
            <div class="card-body">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>Ser no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id=1; ?>
                        <?php  foreach($users as $user):?>
                            <tr>
                            <td><?= $id++ ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['mobile'] ?></td>
                            <td><?= $user['password'] ?></td>
                            <td>
                            
                                <a href="user_edit.php?user_id=<?= $user['id']?>" class="btn btn-warning btn-sm">Update </a>
                                <a href="user_delete.php?user_id=<?= $user['id']?>" class="btn btn-success btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
        
            </div>
        </div>
        
    </div>
  
</html>