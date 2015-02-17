<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Switch Statements</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Switch Statements</h1>

<?php  

$grade = 'C';

switch ($grade) 
{
 case 'A': echo "Great!"; 
                 break;

 case 'B': echo "Good."; 
                 break;

 case 'C': echo "Try harder!"; 
                 break;

 case 'D': echo "Too much TV!"; 
                 break;

 case 'F': echo "Ouch!"; 
                 break;
 default: echo "Error";
}

print "<br /><br />";


$grade = 'C';

switch ($grade) 
{
 case 'A': echo "Great!"; 
                 break;

 case 'B': echo "Good."; 
                 break;

 case 'C': 
 case 'D': echo "Too much TV!"; 
                 break;

 case 'F': echo "Ouch!"; 
                 break;
 default: echo "Error";
}


print "<br /><br />";


$grade = 'foo!';

switch ($grade) 
{
 case 'A': echo "Great!"; 
                 break;

 case 'B': echo "Good."; 
                 break;

 case 'C': 
 case 'D': echo "Too much TV!"; 
                 break;

 case 'F': echo "Ouch!"; 
                 break;
 default: echo "Error";
}


?>

</body>
</html>