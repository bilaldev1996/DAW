<?php 
    include("conexion.php");
    
    /* seleccionar base de datos */
    $db = mysqli_select_db($conectar, "usuarios");
    if (!$db) {
        die("No se pudo seleccionar la base de datos: " . mysqli_connect_error());
    }
    echo "2.Base de datos seleccionada satisfactoriamente <br />";
?>