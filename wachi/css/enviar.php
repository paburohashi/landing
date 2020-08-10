<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$numero = $_POST['phone'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Numero de celular: " . $_POST['phone'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'leancabita@gmail.com';
$asunto = 'Formulario landing page';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html#formulario");
?>