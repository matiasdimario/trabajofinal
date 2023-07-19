<?php

$nombre_form= $_POST['nombre'];
$apellido_form= $_POST['apellido'];
$correo_form= $_POST['correo'];
$mensaje_form= $_POST['mensaje'];

$cuerpo_mail =
"Nombre: " . $nombre_form . "\r\n" .
"Apellido: " . $apellido_form . "\r\n" .
"Correo: " . $correo_form . "\r\n" .
"Mensaje: " . $mensaje_form . "\r\n";

mail("matiasdimario2001@gmail.com","Mensaje enviado desde nuestro sitio",$cuerpo_mail);
//LOCAL
//$conexion=mysqli_connect("localhost","root","","prueba") or exit("No se pudo conectar a base de datos");
//SERVIDOR
$conexion=mysqli_connect("localhost","id20634415_matiasdimario","e!P%d841","id20634415_prueba") or exit("No se pudo conectar a base de datos");

mysqli_query($conexion,"INSERT INTO consultas VALUES (DEFAULT, '$nombre_form','$apellido_form','$correo_form','$mensaje_form')");

mysqli_close($conexion);

header("Location: formulariocontacto.php?ok"); 