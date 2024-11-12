<?php

    $usuario = $_GET["usuario"];
    session_start(); // Se crea la sesión

    echo "<Bienvenido, has iniciado la sesión </br></br></br>";

    $_SESSION["id"] = $usuario;

    echo "Se ha creado una sesión con el nombre de usuario: ". $_SESSION["id"]. "</br>";
?>

<!-- Se accede de nuevo a la sesión -->
<a href="video10.php"> Pincha aquí para cerrar la sesión</a>