<?php
require("config.php");
if(empty($_SESSION['user']))
{
	header("Location: ../dashboard.html");
	die("Redirecting to ../dashboard.html");
}
?>