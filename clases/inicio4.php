<?php
    include_once './Juego.php';
    //clase juego
    $miJuego = new Juego('The Last of Us Part II', 26, 49.99, 'PS4', 1, 4);
    echo "<br><br><strong>".$miJuego->titulo . "</strong>";
    echo "<br>Precio: ".$miJuego->getPrecio() . " euros";
    echo "<br> Precio Iva incluido: ".$miJuego->getPrecioIva() . " euros <br>";

    echo $miJuego->muestraResumen();
?>