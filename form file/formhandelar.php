<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_from='mobarak.hossain4356@gmail.com';
// $email_subject="New Form Submission";
$email_body="User Name:$name.\n".
            "User Email: $visitor_email.\n".
            "User Message: $message. \n";

$to ="mobarak.hossain4356@gmail.com";
$headers="From: $email_from \r\n";
$headers.="Reply-To:$visitor_email\r\n";

mail($to,$email_body,$headers);
header("location:contact.html");

?>