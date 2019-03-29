<?php
$nombre=$_POST['Nombre'];
$email=$_POST['Correo'];
$telefono=$_POST['Telefono'];
$mensaje=$_POST['Mensaje'];

$header='from: '.$email."\r\n";
$header.="X-Mailer: PHP/".phpversion()."\r\n";
$header.="Mime-Version: 1.0 \r\n";
$header.="Content-type: text/plian";

$mensaje="Este mensaje fue enviado por ".$nombre.",\r\n";
$mensaje.="su e-mail es: ".$email."\r\n";
$mensaje.="su telefono es: ".$telefono."\r\n";
$mensaje.="Mensaje: ".$_POST['Mensaje']."\r\n";
$mensaje.="enviado el ".date('d/m/Y',time());

$para='nickooggero.dgw3547@gmail.com';
$el_asunto='Asunto del mail recibido';

mail($para, $el_asunto, utf8_decode($mensaje), $header);

header("Location:contacto.html")
?>