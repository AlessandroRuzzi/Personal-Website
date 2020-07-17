<?php

	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["phone"];
	$content = $_POST["message"];


	$toEmail = "alrxruzzi98@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}

?>