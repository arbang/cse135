<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Self-posting Email Form with Validation</title>
<style type="text/css">
 .errorMsg {color: red; font-style: bold;}
</style>
</head>
<body>
<?php



$nameError = "";
$emailError = "";

function validate($name,$email)
{
	
 global $nameError, $emailError;
 $valid = true;

 
 $name = trim($name);
 $email = trim($email);

 if (empty($name))
 { 
   $valid=false;
   $nameError = "Name required.";
 }
 
 if (empty($email))
 {
   $valid=false;
   $emailError = "Email required.";
 }
 
 return $valid;
 
}

function show_form($name="", $email="")
{
  global $nameError, $emailError;
  
?>

<form action="form5.php" method="post">
 <label>Name: <input type="text" name="name" value="<?= $name?>"></label><span class="errorMsg"><?= $nameError ?></span><br />
 <label>Email: <input type="text" name="email" value="<?= $email?>"></label><span class="errorMsg"><?= $emailError ?></span><br />
 <input type="submit" value="submit">
</form>
<?php

} // end show_form function

if ($_SERVER['REQUEST_METHOD']=='POST')
 {
 	
   if (validate($_POST['name'], $_POST['email']))
     print "Thanks ". $_POST['name']." spam will be sent to ". $_POST['email'] . " soon!";
   else
    show_form($_POST['name'], $_POST['email']);
 }
else 
   show_form();

?>

</body>
</html>