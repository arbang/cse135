<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Methods for Inserting PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Standard XHTML</h1>
<hr />

<?php
 print "Hello from standard &lt;?php ?&gt; statement"
?>

<br />

<script language="php">
 print "Hello from script statement";
</script>

<br />

<%
 print "Hello from ASP style syntax?";
%>

<br />

<?php
 $foo = "right";
?>

<h1 align="<?= $foo ?>">Aligned by PHP</h1>
</body>
</html>