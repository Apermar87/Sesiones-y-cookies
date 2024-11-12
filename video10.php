<?php

// Antes de cerrar sesion hay que comprobar que exista dicha seccion y que esta iniciada antes de cerrarla. Si no se introduce esta linea de codigo da un WARNING
if (!session_id()) {
    session_start();
}

// Se cierra la sesion
    session_destroy();  

?>