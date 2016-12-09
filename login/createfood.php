<?php
require "loginheader.php";
require 'includes/functions.php';
include_once 'config.php';

$newid = uniqid(rand(), false);
$what = $_POST['what'];
$quantity = $_POST['quantity'];
$location = $_POST['location'];

$a = new NewFoodForm;

$response = $a->createFood($newid, $_SESSION['email'], $what, $quantity, $location);

if ($response == 'true') {
	header('Location: /');
} else {
	//Failure
	mySqlErrors($response);
}

?>