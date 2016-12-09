<?php
require 'includes/functions.php';
include_once 'config.php';

$newid = uniqid(rand(), false);
$name = $_POST['name'];
$newpw = password_hash($_POST['password'], PASSWORD_DEFAULT);
$pw1 = $_POST['password'];
$newemail = $_POST['email'];
$newlocation = $_POST['location'];

//Validation rules
if (strlen($pw1) < 4) {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password must be at least 4 characters</div><div id="returnVal" style="display:none;">false</div>';

} elseif (!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true) {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Must provide a valid email address</div><div id="returnVal" style="display:none;">false</div>';

} else {
    //Validation passed
    if (isset($_POST['name']) && !empty(str_replace(' ', '', $_POST['name'])) && isset($_POST['password']) && !empty(str_replace(' ', '', $_POST['password']))) {

        //Tries inserting into database and add response to variable

        $a = new NewUserForm;

        $response = $a->createUser($name, $newid, $newemail, $newpw, $newlocation);
		//var_dump($response);
        //Success
        if ($response == 'true') {
            echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'. $signupthanks .'</div><div id="returnVal" style="display:none;">true</div>';
        } else {
            //Failure
            mySqlErrors($response);
        }
    } else {
        //Validation error from empty form variables
        echo 'An error occurred on the form... try again';
    }
};
