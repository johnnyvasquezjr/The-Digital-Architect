<?php
var_dump($_POST);
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["msg"];



$EmailTo = "lidiapushkar429@gmail.com";
$Title = "New Message Received";

// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Message: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Title,  $Fields, "From:".$email);

