<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$consulta = $_POST['consulta'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$consulta = "NOMBRE: " . $nombre . " \r\n";
$consulta .= "TELEFONO: " . $telefono . " \r\n";
$consulta .= "MENSAJE: " . $_POST['consulta'] . " \r\n";

$para = 'estudio.xivo@gmail.com';

mail($para, "Consulta Web", utf8_decode($consulta), $header);

header("location:contacto-send.html");

?>