<?php
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$mobile   = $_REQUEST["mobile"];
$message   = $_REQUEST["message"];
$to    = "kovacs.adam@itexpress.hu"; /*Replace your email id here*/
if (isset($email) && isset($name) && isset($message)) {
    $subject = "$name - MEGKERESÉS";
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$message     = "From: $name<br/> Email: $email <br/> Mobile: $mobile <br/>Message: $message";
	
   $mail =  mail($to, $subject, $message, $headers);
	 if($mail)
	 {
		 echo '
		 <html>
		 <head>
			 <meta http-equiv="refresh" content="0;url=sent.html" />
		 </head>
		 <body>
 
		 </body>	
			 </html>
		 ';
	 }
 
 else
	 {
		 echo 'Sikertelen elküldés :(';
	 }
 }
 
 ?>