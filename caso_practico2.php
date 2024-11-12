<!-- localhost/Tema5/caso_practico2.php -->

<html>
    <head>
        <title> Contador de visitas por usuario</title>
    </head>

    <body>
        <?php
            session_start();
            if (!isset($_SESSION["contador"])){
                $_SESSION["contador"] = 1;
            } else {
                $_SESSION["contador"]++;
            }

            echo"Esta página se ha visto " . $_SESSION["contador"]. " veces";
        ?>
    </body>
</html>