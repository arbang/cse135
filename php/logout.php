<?php
require("config.php");
unset($_SESSION['user']);
header("Location: ../loginPage.html");
die("Redirecting to: ../loginPage.html");
?>
