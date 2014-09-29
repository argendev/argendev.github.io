<?php

$to = "info@argendev.com";
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$subject = strip_tags($_POST['subject']);
$message = strip_tags($_POST['message']);
$headers = "From: $name <$email>";
$body = "Name: $name
Email: $email
Subject: $subject
Message: $message";

if(mail($to, "Contact Form: $subject", $body, $headers)) {
	header("Location: ok.html");
} else {
	header("Location: error.html");
}

?>