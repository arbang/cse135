<?php

require("config.php");

$email=$_POST['email'];
//$email=$_POST('email');
$submittedemail='ekdus340@gmail.com';
$sendPwd = false;

if($submittedemail == $email){
	$sendPwd = true;
}
else {
	print("Email does not exist");
}

if($sendPwd == true){
	$randomPwd = "hello";
	$from = "ekdus340@gmail.com";
	$subject = "This is your new password";
	$message = "new password"
	mail("ekdus340@gmail.com", $subject, $message, "From: $from\n");
	print("Your new passoword has been sent");
}




?>