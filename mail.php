<?php
$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];


$formcontent = " De: $name \n Email: $email \n Mensaje: $message";
$recipient   = "contacto@salutem.cl";

$subject = "Contacto Salutem Desde Salutem.cl";

$mailheader = "De: $email \r\n";

//var_dump(mail($recipient, $subject, $formcontent, $mailheader));exit();

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

header("location: index.html"); 
?>
