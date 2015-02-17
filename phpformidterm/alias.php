<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Alias Fun!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Alias Fun!</h1>

<?php  

$name = "Jack Bristo";
$myname = $name;

print "name = $name myname = $myname <br />";

$name = "Arvin Sloan";

print "name = $name myname = $myname <br />";


print "<br /><b>Now with aliases</b><br /><br >";

$name = "Jack Bistro";
$myname = & $name;

print "name = $name myname = $myname <br />";

$name = "Arvin Sloan";

print "name = $name myname = $myname <br />";

$myname = "Sydney Bristo";
print "name = $name myname = $myname <br />";


print "<br /><b>Upset with unset</b><br /><br >";

$name = "Jack Bistro";
$myname = & $name;

print "name = $name myname = $myname <br />";
unset($name);
print "name = $name myname = $myname <br />";

?> 


</body>
</html>