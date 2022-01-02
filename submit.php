<?php
$email = $_POST['emailHASHED'];
$name = $_POST['nameHASHED'];
$message = $_POST['messageHASHED'];
$formcontent = "From: $name \n Message: $message \n ";
$recipient = "mateenuidesigner@gmail.com";
$subject = "Thanks for reaching out";
$mailheader = "From: $email \r\n";
$user = "$email";
$usersubject = "Thanks for Contacting us";
$userheaders = "From: mateenUI\n";

$usermessage = "Thank you for contacting us. Your request will be attended to shortly.";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
mail($user, $usersubject, $usermessage, $userheaders);
header("Location: thanks.html");
echo "Thank You"

?>
