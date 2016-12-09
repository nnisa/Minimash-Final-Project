<?php
require "loginheader.php";
require 'includes/functions.php';
include_once 'config.php';

$id = $_GET['id'];

$a = new ClaimFood;

$response = $a->deleteFood($id);

if ($response == 'true') {
	header('Location: /');
} else {
	//Failure
	mySqlErrors($response);
}

?>