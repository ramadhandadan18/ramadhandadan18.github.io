<?php $name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$formcontent = "From: $name \n comment: $comment";
$recipient = "ramadhanrsa18@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
