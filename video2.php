<!-- localhost/Tema5/video2.php -->

<?php

    $nombre = "cookie";
    $valor = "Homer";

    // El tiempo de expiración es en 30 minutos. PHP traduce la fecha al formato adecuado
    $expiracion = time() + 60 * 30;

    //Ruta y dominio
    $ruta = "/cookies/";
    $dominio = "prueba.dev";

    // Solo envia la cookie con conexion HTTPs
    $seguridad = false;

    // Cookie disponible solo para el protocolo HTTP
    $solohttp = true;

    setcookie($nombre, $valor, $expiracion, $ruta, $dominio, $seguridad, $solohttp);
    echo "Cookie establecida";



?>