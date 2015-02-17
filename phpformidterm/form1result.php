<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Form Echo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>



<?php

print "Foo = $foo";

if (isset($DEBUG) && ($DEBUG == true))
  print "ZOMG something juicy in here!!!!";

  if ($_GET['sex'] == 'male')
    $salutation = 'Mr.';
   else  
    $salutation = 'Ms.';

  switch ($_GET['lang']) {
    	case 'Chinese':
    		$greeting = 'Ni hao';
    		break;
    	case 'English':
    		$greeting = 'Hi';
    		break;
    	case 'French':
    		$greeting = 'Bonjour';
    		break;
    	case 'Japanese':
    		$greeting = 'Konichiwa';
    		break;
    	case 'Spanish':
    		$greeting = 'Hola';
    		break;
    	default:
    		$greeting = '';
    		break;
    }  
  print ("<h1> $greeting $salutation". $_GET['name'] . "!</h1>");
  
  print ("Sending spam to ". $_GET['email'] . " right away!");
  
?>

</body>
</html>