<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Fun with While Loops</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Fun with While Loops</h1>

<?php  

$x = 10;
while ($x > 0)
{ 
	print "$x <br />";
	$x--;
}

print "<br /><br >";
print ("Bail out early with break<br />");
$x = 10;
while ($x > 0)
{
	if ($x == 5)
	  break;
	print "$x <br />";
	$x--;
}

print "<br /><br >";
print ("Skip printed out 3 with continue<br />");
$x = 10;
while ($x > 0)
{
	$x--;
	if ($x == 3)
	  continue;
	print "$x <br />";
}

print "<br /><br />";

# Something slightly more intersting

$x = 1;
while ($x < 7)
{
  print "<h$x>Heading $x</h$x>";
  $x++;
}

print "<br /><br />";

# Seems a bit odd doesn't it?

$x = 'a';
while ($x < 'z')
{ 
	print "$x <br />";
	$x++;
}

print "<br /><br />";

# Watch it!

$x = 'a';
while ($x <= 'z')
{ 
	print "$x <br />";
	$x=x+1;
}


?>

</body>
</html>