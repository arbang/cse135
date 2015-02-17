<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Case Sensitivity</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>PHP Case Sensitivity Demo</h1>


<?php  

print("no problem <br />");
PRINT("to case built-in functions <br />");
pRiNT("any way you like but stick with lowercase please!<br /><br />");

# I used the function style there just to remind you that print is a function

$x = 5;

IF ($x > 1)
  print "Uppercase works with statements <br />";

if ($x > 1)
  print "lowercase best with statements (BAD STYLE) <br />";

iF ($x > 1)
 print "Even mixed case works with statements (BAD STYLE) <br /><br />";

print "Watch out with variables!<br />";
print "X = ".$X;
print "<br />";
print "x = ".$x;

?> 


</body>
</html>