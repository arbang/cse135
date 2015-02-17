<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Form Test 2 Result</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php

print "We have ".count($_GET)." items in the GET array <br />";
print "We have ".count($_POST)." items in the POST array <br />";
print "We have ".count($_REQUEST)." items in the REQUEST array <br /><br />";

if (count($_GET))
{
 print "From GET array<br />";
 print "Name: ".$_GET['name']." <br />";
 print "Email: ".$_GET['email']." <br /><br />";
}

if (count($_POST))
{
 print "From POST array<br />";
 print "Name: ".$_POST['name']." <br />";
 print "Email: ".$_POST['email']." <br /><br />";
}

if (count($_REQUEST))
{
 print "From REQUEST array<br />";
 print "Name: ".$_REQUEST['name']." <br />";
 print "Email: ".$_REQUEST['email']." <br /><br />";
}

// Look to see if globals are registered
if (@ini_get('register_globals'))
{
  print "Register globals is on<br />";	
  print "Name: $name <br />";
  print "Email: $email <br /><br />";
}

print "Importing variables (could be used if globals are off)<br />";
import_request_variables("gp","rvar_");
/* we could not use a prefix and get same effect as normal globals */
print "Name: $rvar_name <br />";
print "Email: $rvar_email <br /><br />";


print "<hr /> Posted by browser id as ". $_SERVER['HTTP_ACCEPT'] . $_SERVER['HTTP_USER_AGENT'];

print "hi";

?>

</body>
</html>