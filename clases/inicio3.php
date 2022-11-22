<?php
    include_once './Dvd.php';
    //clase dvd
    $miDvd = new Dvd('Origen', 24, 15, 'es, en, fr', '16:9');
    echo "<br><br><strong>".$miDvd->titulo . "</strong>";
    echo "<br>Precio: ".$miDvd->getPrecio() . " euros";
    echo "<br> Precio Iva incluido: ".$miDvd->getPrecioIva() . " euros <br>";

    echo $miDvd->muestraResumen();
?>