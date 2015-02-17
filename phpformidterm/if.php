<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>If Statements</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>If Statements</h1>

<?php  

if (true)
 print "That was a true statement<br />";

$x = 5;
if ($x % 2)
 print '$x is odd<br />';
else
 print '$x is even<br />';

$likedogs = true;

if ($likedogs)
{
 print "I like dogs.";
 print "Yes I like dogs<br />";
}
else 
{
 print "I dislike dogs.";
 print "No I do not like dogs<br />";
}

# now with endif

$likedogs = false;
$likecats = false;

if ($likedogs):
 print "I like dogs.";
 print "Yes I like dogs<br />";
elseif ($likecats):
       print "I like cats.";
       print "Yes I like cats<br />";
else: 
 print "I don't like much<br />";
endif;

?>

</body>
</html>