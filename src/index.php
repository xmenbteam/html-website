<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = 'samcjparry@gmail.com';
$headers = "From: ".$mailFrom;
$txt = "You have received an email from ".$name.".\n\n".$message;


mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");

// need to forward emails from your website to your gmail through your host - new alias.

}