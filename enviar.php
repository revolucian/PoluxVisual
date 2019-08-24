<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto Pólux Visual</title>
</head>
<body>
    <div>
    <?php
    $destino= "visualpolux@gmail.com";
    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $email= $_POST["email"];
    $mensaje= $_POST["mensaje"];
    $titulo="Mensaje de Pólux Visual";
    $contenido=
                <html>
                    <head>
                        <title>' . $titulo . '</title>
                    </head>
                    <body>
                        <p> <strong>' . $nombre . $apellido . '</strong> te ha enviado el siguiente mensaje:</p>
                        <p>Mensaje: . $mensaje .</p>
                        <p>Puede ponerte en contacto al mail: '. $email .'</p>
                        </body>
                </html>
    
    //"Nombre:" .$nombre . "\nApellido:" . $apellido . "\nEmail:" . $email "\nMensaje:" . $mensaje;//

    $encabezado = "MINE-version: 1.0\r\n";
    $encabezado = "Content-type: text\html; charset=UTF-8\r\n";
   
    mail($destino,$titulo,$contenido,$encabezado);
    header("Location:index.html");
    }
?>
    </div>
</body>
</html>
