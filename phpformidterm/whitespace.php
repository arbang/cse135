<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Whitespace with PHP and HTML</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>The fun interplay
		of
				w	h	i
					t	e space in HTML and PHP</h1>

<pre>
  This is 
    pre-formatted  so w   h    i   t   e space shows!
</pre>


<p>
  This is 
    not pre-formatted  so w   h    i   t   e space doesn't show!
</p>


<p style="white-space: pre">
  The rules 
    can be c h a  n  g  e  d    via CSS
</p>

<h3>Since you output to HTML these rules hold</h3>


<?php  

print "No \n\n returns here";
print "Here be <br /><br />returns";
print "<pre>Returns are \n\n here</pre>";
print "<p style='whitespace: pre'>Returns are \n\n here too</p>";

?> 

<h3>PHP itself is pretty uncaring about most whitespace</h3>

<?php
  print  "	
  	what's	
  			up?<br />";
  			
  echo "White space helps formatting.",
  			" O RLY ",
  	"YA RLY ",				"<br />";
  	
echo"Is this a bandwidth issue?";echo"maybe, maybe not";
?>

</body>
</html>