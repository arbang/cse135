<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Request Variables</title>
</head>
<body>
<h1>Request Variables</h1>

<?php  


print "The browser $HTTP_USER_AGENT from $REMOTE_ADDR requested the page $PHP_SELF isn't helpful without register globals on<br />";

print "The browser ". $_SERVER['HTTP_USER_AGENT'] ." following link " . $_SERVER['HTTP_REFERER'] . " output via SERVER super global array<br />";

print "<br /><br />";


foreach ($HTTP_ENV_VARS as $key => $value)
{
 print "$key = $value <br />";
}

print "<br /><br />";
print PHP_VERSION . "<br />";
print PHP_OS . "<br />";
print SID . "<br />";

print __FILE__ . "<br />";
print __LINE__ . "<br />";

function foo()
{
	print __FUNCTION__;
}

foo();

//print_r (get_defined_constants());
?>

</body>
</html>