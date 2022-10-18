<?php 
    /*Una función que averigüe si un número es par: esPar(int $num): bool*/
    function esPar(int $num):bool{
        if($num%2 == 0){
            echo "true";
            return true;
        }else {
            echo "false";
            return false;
        }
    }
    //esPar(20);

    /* Una función que devuelva un array de tamaño $tam con números aleatorios
    comprendido entre $min y $max : arrayAleatorio(int $tam, int $min, int
    $max) : array */
    function arrayAleatorio(int $tam, int $min, int $max):array {
        $arr = array();
        for ($i=0; $i < $tam ; $i++) { 
            $aleatorio = rand($min, $max);
            $arr[$i] = $aleatorio;
            //echo "<li>$arr[$i]</li>";
        }
        return $arr;
    }
    //arrayAleatorio(10,1,5);

    /* Una función que reciba un $array por referencia y
    devuelva la cantidad de números pares que hay almacenados:
    arrayPares(array &$array): int  */
    
    function arrayPares(array &$array):int {
        $cuenta = 0;
        for ($i=0; $i < count($array) ; $i++) { 
            //echo $array[$i] . "\n";
            if($array[$i]%2 == 0) {
                $cuenta++;
            }
        }
        return $cuenta;
    }

    $array = [1,4,8,10,3];
    arrayPares($array);
?>