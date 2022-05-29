<?php
//Llamando cada input
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo 
$destinatario = "emayamolina@gmail.com";
$asunto = "Desarrollo pagina web(cliente);

$msjcomb = "Enviado por: $nombre \n";
$msjcomb .= "Correo: $email \n";
$msjcomb .= "Telefono: $telefono \n";
$msjcomb .= "Mensaje: $mensaje";

//Enviando el mensake
mail($destinatario, $asunto, $msjcomb);
header('Location:enviado.html');
?>