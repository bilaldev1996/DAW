<?php 
    /*     Crea una función que devuelva el mayor de todos los números recibidos como parámetros: function mayor(): int. Utiliza las funciones func_get_args(), etc... No puedes usar la función max().*/

    function mayor():int {
        if(func_num_args() == 0) {
            return false;
        } else {
            $mayor = 0;
            for($i = 0; $i < func_num_args(); $i++){
                if(func_get_arg($i) > $mayor) {
                    $mayor = func_get_arg($i);
                }
            }

            return $mayor;

        }
    }

    //echo mayor(1,50,55,3);
    /*Crea una función que concatene todos los parámetros recibidos separándolos con un espacio: function concatenar(...$palabras) : string. Utiliza el operador .... */

    function concatenar(...$palabras) : string {
        if(count($palabras) == 0){
            return false;
        }else{
            $concat = '';
            foreach($palabras as $key ) {
                $concat.=" " . $key;
            }
        }
        return $concat;
    }

    echo concatenar('Hola',"que","tal");
?>