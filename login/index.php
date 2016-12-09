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
    <title>Sharing is caring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="form-signin">
        <div class="alert alert-success">You have been <strong>successfully logged in</strong>.</div>
		<a href="share.php" class="btn btn-default btn-lg btn-block">Share</a>
		
		<table style="width:100%">
		  <tr>
			<th>Item</th>
			<th>Quantity</th> 
			<th>Address</th>
			<th>Claim?</th>
		  </tr>
		  <?php echo $response; ?>
		</table>
		
        <a href="logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
    </div> <!-- /container -->
  </body>
</html>
