<?php

	$name = trim($_POST['appname']);
	$email = trim($_POST['appemail']);
	$message = trim($_POST['apptext']);
	$origsubject = trim($_POST['appsubject']);
	
	$emailTo = "example@mail.com"; //Put your own email address here
	$subject = "Site Apponiment: $origsubject";
	$body = "Name: $name \n\nEmail: $email \n\nMessage:\n$message";
	$headers = 'From: '.$email."\r\n" .
        'Reply-To: '.$email."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('success');
	
?>