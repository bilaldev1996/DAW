<?php
    include './biblioteca.php' ;
    

    $numero1 = $_GET['num1'];
    $numero2 = $_GET['num2'];

    if(!$numero1 && !$numero2){
        echo "Error, no se han enviado los datos";
    }else {
        echo "<h1>Número introducidos</h1>";
        echo $numero1 . "." . $numero2;
        echo sumar($numero1,$numero2);
    }

    //$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    $url = "%{HTTP_HOST}";
    echo $url;
?>