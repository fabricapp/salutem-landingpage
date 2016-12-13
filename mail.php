<?php
$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

$to      = 'contacto@salutem.cl';
$subject = 'Contacto Salutem Desde Salutem.cl';
$message = "De: $name \n Email: $email \n Mensaje: $message";

$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("location: mensaje-enviado.html"); 

// $formcontent = " De: $name \n Email: $email \n Mensaje: $message";
// $recipient   = "contacto@salutem.cl";

// $subject = "Contacto Salutem Desde Salutem.cl";

// $mailheader = "From: $email \r\n";

// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

// header("location: mensaje-enviado.html"); 
?>