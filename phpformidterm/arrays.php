<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Arrays in PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Arrays in PHP</h1>

<?php  

$stooges = array('Larry','Curly','Moe');
print "stooge[0] = $stooges[0] <br />";

print "Direct print of the array: " . $stooges . "<br /><br />";

print "The whole array output with foreach <br />";

foreach ($stooges as $name)
{
 print "Hello $name <br />";
}

sort($stooges);
print "<br /><b>Sorted</b><br />";

foreach ($stooges as $name)
{
 print "Hello $name <br />";
}

print "<br />";

print 'Array test $stooges: ' . is_array($stooges) . "<br />";
print 'Array test $stooges[0]: ' . is_array($stooges[0]) . "<br />";

?>

</body>
</html>