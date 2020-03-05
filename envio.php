<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$destino="ids@XXXXX.com";

$asunto="Cliente web ".$nombre;

$mensaje="Nombre: ".$nombre."\r\n";
$mensaje="Email: ".$email."\r\n";
$mensaje="Mensaje: ".$mensaje."\r\n";


mail($destino, $asunto, $mensaje);

header("Location:index.php?i=ok");