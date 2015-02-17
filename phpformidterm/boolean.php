<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Booleans in PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Booleans in PHP</h1>

<?php  

$likedogs = true;
$likecats = false;

print "I like dogs $likedogs. <br />";
print "I like cats $likecats. <br />";

print "<br />";

if ($likedogs)
  print("I like dogs.");
else
  print("I don't like dogs.");

print "<br />";

if ($likecats)
  print("I like cats.");
else
  print("I don't like cats.");

print "<br /><br />";

print 'Test Boolean $likedogs: '. is_bool($likedogs) . "<br />";
print "Test Boolean 0: ". is_bool(0) . "<br />";
print "Test Boolean (boolean)0: ". is_bool((boolean)0);


?>

</body>
</html>