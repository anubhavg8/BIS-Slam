<?php

require("sendgrid-php/sendgrid-php.php");

$name = $_POST['name'];
$email = $_POST['email']; 
$Message = $_POST['message'];

// POST details from html page 

$from = new SendGrid\Email(null, $email); //the person who fills the form
//$from = new SendGrid\Email(null, $from);
$subject = $_POST['subject'];
$to = new SendGrid\Email(null, "info@bispoetryslam.in"); // defaut email , no changes required 

$content2 = new SendGrid\Content("text/plain", $Message); 
// 



$mail = new SendGrid\Mail($from, $subject, $to, $content2);

$response = $sg->client->mail()->send()->post($mail);
// echo $response->statusCode();
var_dump($response->headers());
// echo $response->body();
header( "Location:contactMessage.html" );
?>
