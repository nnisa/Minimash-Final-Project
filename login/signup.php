<?php
  session_start();

  if (isset($_SESSION['email'])) {
      session_start();
      session_destroy();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
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


<body>

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
          <li><a href="http://localhost/home.php#home" class="smoothScroll">Home</a></li>
          <li><a href="http://localhost/home.php#feature" class="smoothScroll">About</a></li>
          <li><a href="http://localhost/home.php#gallery" class="smoothScroll">Neighborhood</a></li>
          <li><a href="http://localhost/home.php#contact" class="smoothScroll">Share</a></li>
          <li><a href="http://localhost/login/main_login.php" class="smoothScroll">Sign in</a></li>
        </ul>
      </div>
    </div>
  </div>
<!-- Navigation section -->


  <div class="signin-page">
    <div class="form">
      <form class="register-form" class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
        <input name="name" id="name" class="form-control" type="text" class="name" placeholder="name"/>
        <input name="email" id="email" class="form-control" type="email" class="email" placeholder="email address"/>
        <input type="password" class="password" name="password" id="password" class="form-control" placeholder="password"/>
        <input type="text" name="location" id="location" class="form-control" class="location" placeholder="location"/>
        <button name="Submit" id="submit" class="signup" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        <p class="message">Already registered? <a href="main_login.php">Sign In</a></p>
      </form>
    </div>
  </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/signup.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>

$( "#usersignup" ).validate({
  rules: {
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 4
	}
  }
});
</script>
  </body>
</html>
