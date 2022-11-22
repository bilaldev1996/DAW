<?php
    include_once './Soporte.php';
    include_once './CintaVideo.php';
    include_once './Dvd.php';
    include_once './Juego.php';

    //clase soporte
    $soporte1 = new Soporte('Tenet', 22, 3);

    echo "<strong>".$soporte1->titulo . "</strong>";
    echo "<br>Precio: ".$soporte1->getPrecio() . " euros";
    echo "<br> Precio Iva incluido: ".$soporte1->getPrecioIva() . " euros <br>";

    echo $soporte1->muestraResumen();
?>