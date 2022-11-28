<?php
    /* Escribe un programa que muestre los números pares del 0 al 50 (dentro de una lista desordenada) */
    echo "<ul>";
    for ($i=0; $i <=50 ; $i++) { 
        //echo "<li>$i</li>";
        if($i%2 == 0) {
            echo "<li>$i</li>";
        }
    };
    echo "</ul>";
?>