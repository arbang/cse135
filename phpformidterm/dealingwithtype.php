<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dealing with Type</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Dealing with Type</h1>

<?php  

$myString = "Thomas Powell";
$myNumber = 3;
$myBoolean = true;
$myDouble = 3.456;
$myArray = array(1,2,3,4,5);

echo gettype($myString) . "<br />";
echo gettype($myNumber) . "<br />";
echo gettype($myBoolean) . "<br />";
echo gettype($myDouble) . "<br />";
echo gettype($myArray) . "<br />";


?>

</body>
</html>