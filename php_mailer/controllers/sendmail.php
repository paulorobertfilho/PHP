<?php
include_once '../models/env.php';
obStart();

//sleep(1);

$send = new \stdClass();

$send->email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$send->message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

$errorArray = [];

// error check
if ($send->email === FALSE) {array_push($errorArray, "Please enter a valid email address.");}
elseif($send->message === ""){array_push($errorArray, "Please enter some content message");}


if(count($errorArray) === ERROR_RESPONSE){
    // Do something
    $send->email = trim($send->email);
    
    echoJson(RESPONSE_SUCCESS, "Your message has been sent successfully!");
    obFlush();
    $mailType = 'sendmail';
    include_once '../models/email_temp/temp.php';
    sendMail(SUBJECT, $email_temp, $send->email);
}
else{
    echoJson(RESPONSE_WARNING, implode($errorArray, "<br>"));
}