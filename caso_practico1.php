<!-- localhost/Tema5/caso_practico1.php -->

<?php

$usuario1 = $_GET["usuario"];
$contraseña = $_GET["pass"];

if ($usuario1 == "userCorrecto"){
    session_start();        // Se crea la sesion
    $_SESSION["id"] = $usuario1;    

    echo "Se ha creado una sesión con el nombre de usuario: ".$_SESSION["id"]."</br>";
} else {
    echo"No se puede iniciar una sesion con este usuario";
}

?>