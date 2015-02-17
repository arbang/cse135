<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Self-posting form</title>
</head>
<body>
<?php


if (!(isset($_POST['submit'])))
{
?>

<h1>Simple Data Form That Self Posts</h1>
<hr>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

<label>Name: <input type="text" name="name" size="30"></label><br />
<label>Email: <input type="text" name="email" size="40"></label><br />
<label>Number of Shirts: <input type="text" name="numshirts" size="3"></label><br />
<label>Shirt Size: <select name="shirtsize">
			<option>XL</option>
			<option selected="selected">L</option>
			<option>M</option>
			<option>S</option>
		    </select>
</label><br />
<input type="hidden" name="key" value="foo">
<input type="submit" name="submit" value="Order">

</form>

<?php
 } elseif ($_POST['submit'] == 'Order') 
         {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $numshirts = $_POST['numshirts'];
          $shirtsize = $_POST['shirtsize'];

          print "<h1>Thank you!</h1>";

          print "$name from $email you ordered $numshirts of size $shirtsize";
         }
?>
</body>
</html>