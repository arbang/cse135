<?
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  mail( "tpowell@pint.com", "Feedback Form Results",$message, "From: $email" );
  header( "Location: form6thankyou.html" );
?>