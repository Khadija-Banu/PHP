<?php
 include 'connect.php';
 $userId=$_GET['user_id'];
 $sql="select * from crud where id=$userId";
 $statement=$pdo->query($sql);
 $user=$statement->fetch(PDO::FETCH_ASSOC);
//  var_dump($user);
//  die;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $password=$_POST['password'];

 $sql="update crud set name='$name', email='$email',mobile='$mobile',password='$password' where id=$userId";
$statement=$pdo->prepare($sql);
$statement->execute();
header('location:user_list.php');
}
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
            <div class="card-header">Update user</div>
            <div class="card-body">
            <form method="post">
            <div class="mb-3">
                <label  class="form-label">Name</label>
                <input type="text" class="form-control" value="<?= $user['name'] ?>" placeholder="Enter your name" name="name">
            </div>
            <div class="mb-3">
                <label  class="form-label">Email</label>
                <input type="email" class="form-control" value="<?= $user['email'] ?>" placeholder="Enter your email"name="email" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Mobile</label>
                <input type="text" class="form-control" value="<?= $user['mobile']?>" placeholder="Enter your mobile no" name="mobile">
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="text" class="form-control" value="<?=$user['password'] ?>" placeholder="Enter your password" name="password" >
            </div>            

            <button type="submit" class="btn btn-primary">+ Update User</button>
        </form>
            </div>
        </div>
        
    </div>
  
</html>