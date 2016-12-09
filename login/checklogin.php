<?php
//DO NOT ECHO ANYTHING ON THIS PAGE OTHER THAN RESPONSE
//'true' triggers login success
ob_start();
include 'config.php';
require 'includes/functions.php';

$email = $_POST['myemail'];
$password = $_POST['mypassword'];

// To protect MySQL injection
$email = stripslashes($email);
$password = stripslashes($password);

$response = '';
$loginCtl = new LoginForm;
$conf = new GlobalConf;

$response = $loginCtl->checkLogin($email, $password);


$resp = new RespObj($email, $response);
$jsonResp = json_encode($resp);
echo $jsonResp;

unset($resp, $jsonResp);
ob_end_flush();
