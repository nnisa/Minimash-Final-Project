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
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>

<body>
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
