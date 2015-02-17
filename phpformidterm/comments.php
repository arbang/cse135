<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Larger Output</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Comments in action</h1>

<!-- standard (X)HTML comments -->

<?php  

# Example of shell script type of comment
# you have to put one on each
# line you want to 
# comment out

$x = 5;

// A standard one line comment - btw x is now 5

print "x = ". $x;
print "<br />";

/* 
  Here we 
  have many 
  lines of
  comments
*/

print "Done."

?> 
</body>
</html>