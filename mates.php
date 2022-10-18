<?php
    /* mates.php: Genera un array aleatorio de 33 elementos con números comprendidos entre el 0 y 100 y calcula:

    El mayor
    El menor
    La media */
    $arr = array();
    $mayor = "";
    $menor = "";
    $suma = 0;
    $media = 0;
    for ($i=1; $i <=33 ; $i++) { 
        $aleatorio = rand(0,100);
        $arr[$i] = $aleatorio;
        //echo "<li>$arr[$i]</li>" . "<br>";
        $suma = $suma + $arr[$i];
        $media= $suma / 33;
    }
    echo "El mayor es: " . max($arr);
    echo "<br>";
    echo "El menor es: " . min($arr);
    echo "<br>";
    echo "La media es: " . $media;
?>