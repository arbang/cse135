<?php
/*
	if(empty($_POST['username'])) {
		$this->HandleError("Username is empty!");
		return false;
	}

	if(empty($_POST['password'])) {
		$this->HandleError("Password is empty!");
		return false;
	}
	*/

require("config.php");
$submitted_username = '';
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$hardcodedpw = 'opensesame';
$login_ok = false;

if( $password == $hardcodedpw ) {
	$login_ok = true;
}

else
	header("Location: ../loginerror.html");


if($login_ok) {
	$_SESSION['user'] = $username;
	session_start();
	header("Location: dashboard.php");
	die("Redirecting to: dashboard.php");
	//echo $_SESSION['user'];
}

else {
	print("Login Failed.");
	$submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
}

?>
