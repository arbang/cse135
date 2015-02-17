<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Strings in PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Strings in PHP</h1>

<?php  

$a = "Thomas Powell";
$b = 1024;

print "Thomas Powell's favorite number is $b <br />";
print 'Thomas Powell\'s favorite number is $b <br />';

print "Thomas Powell would like to make \$$b / hour teaching you PHP.<br />";
print "Not what I \n\n \t wanted!";

?>

<pre>
 <?php
    print "Now that is what I \n\n \t wanted!";
  ?>
</pre>

<br /><br />

<?php
 print 'String test $a '. is_string($a) . '<br />';
 print 'String test $b '. is_string($b) . '<br />';
 print 'String test $b when cast as a string ' . is_string( (string)$b ) . '<br /><br />';

 $c = $a . $b;
 print "c = $c <br />";
 print 'String test $c '. is_string($c) . '<br />';
 
?>
</body>
</html>