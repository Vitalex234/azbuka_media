<?php

	$name = trim($_POST['conname']);
	$email = trim($_POST['conemail']);
	$message = trim($_POST['context']);
	$origsubject = trim($_POST['consubject']);
	
	$emailTo = "example@mail.com"; //Put your own email address here
	$subject = "Site Contact: $origsubject";
	$body = "Name: $name \n\nEmail: $email \n\nMessage:\n$message";
	$headers = 'From: '.$email."\r\n" .
        'Reply-To: '.$email."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('success');
	
?>