<?php 
    $nombre = $_GET['nombre'];
    $apellido1 = $_GET['apellido1'];

    if(!$nombre && !$apellido1){
        echo "Error, no se han enviado los datos";
    }else {
        echo "<h1>Hola $nombre $apellido1</h1>";
    }

?>