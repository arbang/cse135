<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Constants in PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Constants in PHP</h1>

<?php  

define('NAME',"Thomas A. Powell");
define('PI',3.14);

print "My name is ".NAME."<br />";
print "PI = ".PI;

print "<br /><br />Note the constants below don't get interpolated <br /><hr />";
print "My name is NAME <br />";
print "The value of pi is PI<br /><hr />";

//PI = 4; // should throw error
?>
</body>
</html>
