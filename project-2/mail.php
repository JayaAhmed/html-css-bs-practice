<?php
if(isset ($_POST['name']))
$name = $_POST['name'];
if(isset ($_POST['email']))
$name = $_POST['email'];


$content = "From: $name";
$recipient = "jaya@example.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>