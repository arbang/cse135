<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Larger Output</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Standard XHTML</h1>
<hr />

<?php  

$myOutput = <<<BIGOUTPUT

  <p> all sorts of <i>stuff</i> here </p>
  <hr />
  <p> more markup goes <strong> here </strong> </p>
  <h2> and here </h2>
  
BIGOUTPUT;

echo $myOutput;

?> 
</body>
</html>