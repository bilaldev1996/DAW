<?php
    /* Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios comprendidos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede repetir ninguno.
Muestra a continuación por pantalla el contenido del array de tal forma que:

    La columna del máximo debe aparecer en azul.
    La fila del mínimo debe aparecer en verde
    El resto de números deben aparecer en negro. */

    $bidimensional = array();

    for ($i=0; $i < 2 ; $i++) { 
        
        for ($j=0; $j < 4 ; $j++) { 
            
            $aleatorio = rand(100,999);
            $bidimensional[$i][$j] = $aleatorio;

            echo $bidimensional[$i][$j] . "<br/>";
        }
    }

?>