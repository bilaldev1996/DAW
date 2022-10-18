<?php
    /* crea un archivo con funciones para sumar, restar, multiplicar y dividir dos números. */

    function sumar(...$args){
        if(in_array('',$args)){
            return "<h1>No se puede sumar un número con un string</h1>";
        }
        if(count($args) == 0){
            return false;
        } else {
            $suma = 0;

            foreach($args as $num){
                $suma+=$num;
            }
            return "<p>Resultado de la operación:</p>" . $suma;
        }
    }

    //echo sumar(1,2);

    function restar(...$args){
        if(count($args) == 0){
            return false;
        }

        $resta = 0;
        
        $resta = $args[0] - $args[1];

        return "<p>Resultado de la operación:</p>" . $resta;
    }

    //echo restar(1,5);

    function multiplicar(...$args){
        if(count($args) == 0){
            return false;
        } else {

            $multiplica = 1;

            foreach($args as $num){
                $multiplica *=$num ;
            }
            return "<p>Resultado de la operación:</p>" . $multiplica;

        }
    }

    //echo multiplicar(3,3);

    function dividir(...$args){
        if(count($args) == 0){
            return false;
        }

        $divide =0;

        $divide = $args[0] / $args[1];

        return "<p>Resultado de la operación:</p>" . $divide;

    }

    //echo dividir(9,3);
?>