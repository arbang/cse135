<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simple File Inclusion</title>
</head>
<body>

<?php 
    readfile('header.html');
?>

<h1>Require (Execute and may error)</h1>
<hr />
<p>Page content goes here...</p>

<?php 
    require('foobar.php');
    # does not exist - should not fail but may print message
?>



<?php

print "Hello again!";

?>
</body>
</html>
