<?php

    //$categoria = 23;
    $pagina = 2;
    $productos = array(
        array( 'categoria' => 33, 'nombre' => 'Zapatos lala', 'precio' => 80 ),
        array( 'categoria' => 24, 'nombre' => 'Pantalones lolo', 'precio' => 45.95 ),
        array( 'categoria' => 33, 'nombre' => 'Zapatos rmaia', 'precio' => 29.99 ),
        array( 'categoria' => 23, 'nombre' => 'Camiseta bilal', 'precio' => 12.00 ),
        array( 'categoria' => 33, 'nombre' => 'Zapatos maya', 'precio' => 33.91 ),
        array( 'categoria' => 24, 'nombre' => 'Pantalones color', 'precio' => 3 ),
        array( 'categoria' => 33, 'nombre' => 'Zapatos lulu', 'precio' => 90 ),
        array( 'categoria' => 23, 'nombre' => 'Camiseta lili', 'precio' => 11 ),
    );



    echo sort($productos);


    /* for ($i=0; $i < count($productos) ; $i++) { 
        if($categoria == $productos[$i]['categoria']){
            echo $productos[$i]['nombre'];
        }
    } */

?>