<?php
    /*     digitos(int $num): int → devuelve la cantidad de dígitos de un número.
   */

    function digitos(int $numero) : int {
        $n = 0;

        do{
            $numero = floor($numero / 10);
            $n = $n + 1;
        } while ($numero > 0);
            //echo " Tu numero tiene " . $n . " digitos";
            return $n;
        }

    digitos(100);

    //digitoN(int $num, int $pos): int → devuelve el dígito 
    //que ocupa, 
    //empezando por la izquierda, la posición $pos.
    function digitoN(int $num, int $pos) : int {
        $result = digitos($num);//numero de digitos de $num
        //echo $result;
        $arr = array_map('intval',str_split($num)); //intval : obtiene el valor entero de una variable, convertimos un numero entero en array.
        array_push($arr,$pos); //añadimos $pos al array
        echo "el valor del digito es:". $arr[$result]. "</br>"; 
        return $result;
    }
    digitoN(10545,15);

    /*  quitaPorDetras(int $num, int $cant): int → 
    le quita por detrás (derecha) $cant dígitos.
    array_pop()
    */
    
    function quitaPorDetras(int $num, int $cant) : int {
        $arr = array_map('intval',str_split($num)); 
        $res = 0;
        
        for ($i=0; $i < $cant ; $i++) { 
            array_pop($arr);
        }
        for ($i=0; $i <count($arr) ; $i++) { 
            echo "<li>$arr[$i]</li>";
            $res.=$arr[$i];
        }
        return $res;
    }

    echo quitaPorDetras(9000000,5);


    /*
    array_shift()
    quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda) $cant dígitos.  */

    function quitaPorDelante(int $num, int $cant): int {
        $arr = array_map('intval',str_split($num)); 
        $res = 0;
        
        //Recorremos el array y vamos eliminando según la cantidad de que queremos eliminar
        for ($i=0; $i < $cant ; $i++) { 
            array_shift($arr);
        }

        //Sólo muestra el array en pantalla
        for ($i=0; $i <count($arr) ; $i++) { 
            echo "<li>$arr[$i]</li>";
            $res.=$arr[$i];
        }
        if(!$res){
            echo "Se han borrado todos los números";
            exit();
        }else {

            return $res; //En esta variable almacenamos el número que queda después de quitar los números
        }
    }

    echo quitaPorDelante(12345,5);
?>