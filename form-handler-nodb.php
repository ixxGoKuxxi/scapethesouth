<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "scapethesouth@gmail.com"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up email
$msg = "New contact form submission!" \n . "Name:" $name \n . "Here is their info," $email \n . "Phone:" $phone \n . "Message:" $message \n;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
mail($email,"Thank you for your form submission",$msg);
echo 'Thank you for your submission.  Please <a href="index.html">Click here to return to our homepage.';

?>

