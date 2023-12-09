<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Realtime Chat application | Rk's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body class="bg-secondary">
    <div class="container mt-5  ">
        <div class="card w-50 " style="margin-left:25%; ">
            <div class="card-header">
                <h3>Realtime Chat App</h3>
            </div>
            <div class="error_text"></div>
            <div class="card-body">
            <form method="post" enctype="multipart/form-data"> 
            <div class="mb-3">
                    <label  class="form-label">Enter your name</label>
                    <input type="text" name="user_name" class="form-control" id="user_name"  required>
                </div>                               
                <div class="mb-3">
                    <label  class="form-label">Enter your email</label>
                    <input type="email" name="user_email" class="form-control" id="user_email" data-parsley-pattern="email" required>
                </div>
                <div class="mb-3 icon">
                    <label class="form-label">Enter your password</label>
                    <input type="password" name="user_password" class="form-control" id="user_password" data-parsley-minlength="6" data-parsley-maxlength="12" required>
                    <i class="fas fa-eye" style="position:absolute; right:25px; top:56%; "></i>
                </div>
                <div class="mb-3">
                    <label class="form-label">Enter your picture</label>
                    <input type="file" name="user_image" class="form-control" id="user_password" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Continue to Chat</button>
                </form>

                <div class=" mt-3 text-center fw-medium">Already signed up? <a href="login.php" style="text-decoration: none;">Login now</a></div>
            </div>
        </div>
    </div>


    <script src="js/pass_show_hide.js"></script>
    <script src="js/signup.js"></script>
  </body>
</html>