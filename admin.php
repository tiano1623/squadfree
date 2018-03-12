<?php 
include 'conn.php';


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <title>Bootstrap Example</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">

<style>
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 15px;
  border: none;
  outline: none;
  background-color: #6cf973;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 8%;
}

#myBtn:hover {
  background-color: green;
}
</style>

</head>
<body>
  <section id="intro" class="intro">
    <div class="slogan">
      <h2 style="font-size: 90px;">WELCOME TO 
        <span class="text_color" style="font-size: 90px;">ADMIN</span> 
      </h2>
      <h4 style="font-size: 25px;">Librarian</h4>
    </div>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
        <a class="navbar-brand" href="index.php">
          <h1 style="color: white;">Library Management System</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="admin.php">Home</a></li>
          <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-book fa-fw"></i>Books<i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="manage.php"><i class="fa fa-book fa-fw"></i>Manage Books</a>
                        </li>
                        </li>

                    </ul>
                    <!-- /.dropdown-user -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>User<i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Manage User</a>
                        </li>
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Add User</a>
                        </li>
                        </li>
                        
                    </ul>
                    <li class="active"><a href="index.php">Logout</a></li>
                    <!-- /.dropdown-user -->
                </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</body>
</html>