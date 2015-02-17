<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Fun with For Loops</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Fun with For Loops</h1>

<?php  

for ($x = 0; $x < 10; $x++)
{
	print "$x <br />";
}

print "<br /><br >";
print ("Bail out early with break<br />");
for ($x = 10; $x > 0; $x--)
{
	if ($x == 5)
	  break;
	print "$x <br />";
}

print "<br /><br >";
print ("Skip printed out 3 with continue<br />");

for ($x=10; $x > 0; $x--)
{
	$x--;
	if ($x == 3)
	  continue;
	print "$x <br />";
}

print "<br /><br />";

# Something slightly more intersting

for ($x=1; $x < 7; $x++):
  print "<h$x>Heading $x</h$x>";
endfor;

print "<br /><br />";

# Seems a bit odd doesn't it?

$x = 'a';
for ($x = 'a'; $x < 'z'; $x++)
	print "$x <br />";

print "<br /><br />";



?>

</body>
</html>