<?php
require "loginheader.php";
require 'includes/functions.php';
include_once 'config.php';

$newid = uniqid(rand(), false);

$what = $_POST['what'];
$quantity = $_POST['quantity'];
$neighborhood = $_POST['neighborhood'];
$foodtype = $_POST['foodtype'];
$location = $_POST['location'];
$pickupTime = $_POST['pickupTime'];

$a = new NewFoodForm;

$response = $a->createFood($newid, $_SESSION['email'], $what, $quantity, $neighborhood, $foodtype, $location, $pickupTime);

if ($response == 'true') {
	header('Location: /');
} else {
	//Failure
	mySqlErrors($response);
}

?>