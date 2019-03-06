<?php

$redirect_url = "http://www.bsilva.ca/#successMessage";
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = "Message from bsilva.ca";
	$message = $_POST['message'];

	$mailTo = 'info@bsilva.ca';
	$headers = "From: ".$email;

	if(mail($mailTo, $subject, $message, $headers)){
		
		header("Location: ".$redirect_url);
		die();
	}
}

?>