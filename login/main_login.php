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
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>


<body>
  <div class="signin-page">
    <div class="form">
      <form class="login-form" class="form-signin" id="myemail" class="email-2" type="text" class="form-control" name="form1" method="post" action="checklogin.php">
        <input type="mtemail" class="email-2" placeholder="email"/>
        <input type="password" name="mypassword" id="mypassword" class="form-control" class="password-2" placeholder="password"/>

        <button name="Submit" class="sign-in" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" >Sign In</button>
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
