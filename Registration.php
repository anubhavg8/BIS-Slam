<?php

require("sendgrid-php/sendgrid-php.php"); 
$msg = $_POST['email'];
$email = $_POST['email'];
// POST details from html page 

$from = new SendGrid\Email(null, $email); //the person who fills the form
//$from = new SendGrid\Email(null, $from);
$subject = $_POST['schoolname'];
$to = new SendGrid\Email(null, "info@bispoetryslam.in"); // defaut email , no changes required 
$content1 = new SendGrid\Content("text/plain", $msg);
// 


$mail = new SendGrid\Mail($from, $subject, $to, $content1, $content1);
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
// echo $response->statusCode();
var_dump($response->headers());
// echo $response->body();

header( "Location:contactMessage.html" );
?>
