# login-page
<!DOCTYPE html>
<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="shortcut icon" type="image/png" href="images/login.png" />
  <title>Login Page</title>
</head>



<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mt-4 mb-5">User Login</h1>
                <img class="img img-fluid" src="Images/Userlogin.png" style="width: 25%;">
            </div>
            <div class="col-2"></div>
            <div class="col-8 text-center">
                <form method="post" action="home.php">
                    <input class="form-control mt-4" type="text" placeholder="Username" name="username" required>
                    <input class="form-control mt-3" type="password" placeholder="Password" name="password" required>
                    <input type="submit" class="btn btn-primary mt-3" value="Login" >
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>
