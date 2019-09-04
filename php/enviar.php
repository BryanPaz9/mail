<?php
    $receptor = "bryanascuc7@gmail.com";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $descripcion = $_POST["descripcion"];    
    $contenido = "Nombre: " . $nombre . "\nCorreo" . $correo . "\nMensaje: " . $descripcion;
    mail($receptor, "INFORMACIÓN", $contenido);
    header("Location:../html/gracias.html"); 
?>