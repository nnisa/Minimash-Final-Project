<?php require "loginheader.php"; ?>

<?php
require 'includes/functions.php';
include_once 'config.php';

$a = new GetFood;

$response = $a->retrieve();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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



    <div class="container">
      <div class="form-signin">
        <!-- <div id="success-info" class="alert alert-success">You have been <strong>successfully logged in</strong></div> -->
<!-- 		    <a href="share.php" class="btn btn-default btn-lg btn-block" class ="share-button" >Share</a>
 -->    		
    		<table style="width:100%">
    		  <tr>
    			<th>Item</th>
    			<th>Quantity</th> 
    			<th>Address</th>
    		  </tr>
    		  <?php echo $response; ?>
    		</table>
<!--         <a href="logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
 -->      </div>
    </div> <!-- /container -->
  </body>
</html>
