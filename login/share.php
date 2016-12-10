<?php require "loginheader.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Share!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="form-signin">

      <form class="form-signup" id="share" name="share" method="post" action="createfood.php">
        <h2 class="form-signup-heading">We love sharing too!</h2>
        <input name="what" id="what" type="text" class="form-control" placeholder="What are you sharing today?">
        <br>
		    <input name="quantity" id="quantity" type="text" class="form-control" placeholder="How much do you want to share?">
        <br>
		    <input name="location" id="location" type="text" class="form-control" placeholder="location">
        <br>
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Share</button>
        <div id="message"></div>
      </form>
		
        <a href="index.php" class="btn btn-default btn-lg btn-block">Go back</a>
      </div>
    </div> <!-- /container -->
  </body>
</html>
