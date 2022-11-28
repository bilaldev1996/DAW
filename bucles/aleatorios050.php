<?php
    /*  Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99, y luego muéstralo en una lista desordenada. Para crear un número aleatorio, utiliza la función rand(inicio, fin). Por ejemplo:
$num = rand(0, 99)*/

    $arreglo = array();
    echo "<ul>";
    for ($i=1; $i <=50 ; $i++) { 
        $numAleatorio = rand(0, 99);
        $arreglo[$i] = $numAleatorio;
        echo "<li>$arreglo[$i]</li>" . "<br>";
    }
    echo "</ul>";
?>