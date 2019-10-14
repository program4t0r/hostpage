<?php
$to_address = "lisenmee@gmail.com";
$subject = "Customer Requirement";
 
$message = 'Full Name:'.$_POST['fcname'].'<br/> Email:'.$_POST['fcemail'].'<br/> Website:'.$_POST['fcwebsite'].'<br/> Message :'.$_POST['fccomment'].'<br/>';
			
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8 " . "\r\n";
 
// More headers
$headers .= "Reply-To: Lisenme <info@www.lisenme.com> \r\n";
$headers .= "Return-Path: Lisenme <info@www.lisenme.com> \r\n";
$headers .= "From: Lisenme <info@www.lisenme.com> \r\n";
$headers .= "Organization: Lisenme \r\n";
$headers .= "X-Sender: Lisenme <info@www.lisenme.com>  \r\n";
$headers .= "X-Mailer: PHP \r\n";
 
if(mail($to_address,$subject,$message,$headers,'-finfo@www.lisenme.com'))
    echo "1";
else
    echo "not done";
	
?>