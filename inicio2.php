<?php
    include_once './CintaVideo.php';
    //clase cinta video
    $miCinta = new CintaVideo('Los cazafantasmas', 23, 3.5, 107);
    echo "<br><br><strong>".$miCinta->titulo . "</strong>";
    echo "<br>Precio: ".$miCinta->getPrecio() . " euros";
    echo "<br> Precio Iva incluido: ".$miCinta->getPrecioIva() . " euros <br>";

    echo $miCinta->muestraResumen();
?>