<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Realtime Chat application | Rk's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
</head>
  <body class="bg-secondary">

    <div class="container mt-5  ">
        <div class="card w-50 " style="margin-left:25%; ">
            <div class="card-header">
                <h3>Realtime Chat App</h3>
            </div>
            <div class="card-body">
            <form method="post" enctype="multipart/form-data">                               
                <div class="mb-3">
                    <label  class="form-label">Enter your email</label>
                    <input type="email" name="user_email" class="form-control" id="user_email" data-parsley-pattern="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Enter your password </label>
                    <input type="password" name="user_password" class="form-control" id="user_password" data-parsley-minlength="6" data-parsley-maxlength="12" required>
                </div>
  
                <button type="submit" class="btn btn-primary w-100">Continue to Chat</button>
                </form>

                <div class=" mt-3 text-center fw-medium">Not yet signed up? <a href="login.php" style="text-decoration: none;">SignUp now</a></div>
            </div>
        </div>
    </div>
  </body>
</html>