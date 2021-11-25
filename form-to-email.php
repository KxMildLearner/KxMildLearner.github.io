<?php 
	if (!isset($_POST['submit'])) {
		error_log("you need to submit the form");
	}
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	if(empty($name)||empty($visitor_email))
	{
		error_log("Name and email are manadatory");
		exit();
	}

	$email_form = 'kxuan435@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "You have received a new message from the user $name. \n".
	"email address : $visitor_email\n".
	"Message : \n $message".
	$to = "kxuan435@gmail.com"
	$headers = "From: $email_form \r\n";

	mail($to, $email_subject, $headers)
?>