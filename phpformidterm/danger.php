<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>System Calls Too Easy?</title>
</head>
<body>
<h1>Others have it but PHP makes too easy?</h1>
<hr />
<p>
<pre>
<?php
 print "Going to run an ls command below\n";
 print `ls d*`;
 
 print "Going to cat something now\n";
 print `cat /etc/passwd`;
?>
</pre>
</p>
</body>
</html>