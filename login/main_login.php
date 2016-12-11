<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- stylesheets css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/nivo-lightbox.css">
    <link rel="stylesheet" href="../css/nivo_themes/default/default.css">

    <link rel="stylesheet" href="../css/hover-min.css">
    <link rel="stylesheet" href="../css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
    <!-- stylesheets css -->
    
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>


<!-- Navigation section -->
  <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">minimash</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://localhost/home.html#home" class="smoothScroll">Home</a></li>
          <li><a href="http://localhost/home.html#feature" class="smoothScroll">About</a></li>
          <li><a href="http://localhost/home.html#gallery" class="smoothScroll">Neighborhood</a></li>
          <li><a href="http://localhost/home.html#contact" class="smoothScroll">Share</a></li>
          <li><a href="http://localhost/login/main_login.php" class="smoothScroll">Sign in</a></li>
        </ul>
      </div>
    </div>
  </div>
<!-- Navigation section -->



<body>

  <div class="signin-page">
    <div class="form">
      <form class="form-signin" class="login-form" name="form1" method="post" action="checklogin.php">
        <input name="myemail" id="myemail" type="text" class="form-control" placeholder="Email" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
      </form>
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>
<!-- <script type="text/javascript" src="script.js"></script> 
 --></body>
  </body>
</html>
