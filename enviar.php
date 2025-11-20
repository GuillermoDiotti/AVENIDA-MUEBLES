<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    
    $para = "guillediotti@gmail.com"; // CAMBIA ESTO
    $asunto = "Nuevo contacto desde catálogo web";
    
    $cuerpo = "
    Nuevo mensaje de contacto:
    
    Nombre: $nombre
    Email: $email
    Teléfono: $telefono
    Mensaje: $mensaje
    ";
    
    $headers = "From: noreply@tuservidor.com";
    
    if (mail($para, $asunto, $cuerpo, $headers)) {
        echo "Mensaje enviado correctamente. Gracias por contactarnos.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>