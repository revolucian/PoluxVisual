<?php
    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $email= $_POST["email"];
    $mensaje= $_POST["mensaje"];

    $destino= "visualpolux@gmail.com";
    $titulo="Contacto desde nuestra Web";
    $contenido="Nombre:" .$nombre . "\nApellido:" . $apellido . "\nEmail:" . $email "\nMensaje:" . $mensaje;

    mail($destino, $titulo, $contenido);
    header("Location:index.html");
    }
?>

