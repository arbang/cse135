<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Numbers in PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Numbers in PHP</h1>

<?php  

$a = 754;
$b = 1024;

print $a . "<br/>";
print $a * $b . "<br />";

$big = 2147483648;

print $big . "<br />";

print $big*$big*$big . "<br />";

print '$a is an integer? '. is_integer($a) . "<br />";
print '$big*$big*$big is an integer? ' . is_integer($big*$big*$big) . "<br />";
print '$big*$big*$big is a real? ' .is_real($big*$big*$big) . "<br />";

?> 


</body>
</html>