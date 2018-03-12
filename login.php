<?php
 include("loginserv.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  
    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="color/default.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <div class="col-sm-10" style="width: 600px; margin-left: 250px; margin-top: 50px;">
      <div class="jumbotron">
        <div class="form-group" style="margin-top: -50px;">
          <h1 style="margin-left: 150px;">
            Login
          </h1>
        </div>

        <form class="form-horizontal" method="post" style="margin-left: 50px;">

          <div class="form-group input-group">
            <span class="input-group-addon">
              <span class="fa fa-user"></span>
            </span>
          <input type="text" class="form-control" placeholder="Username" id="user" name="user" required>
        </div>

        <div class="form-group input-group">
            <span class="input-group-addon">
              <span class="fa fa-lock"></span>
            </span>
          <input type="password" class="form-control" placeholder="Password" id="pass" name="pass" required>
        </div>
          <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login" name="submit">
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script src="js/bootstrap.min.js"></script>
</body>
</html>