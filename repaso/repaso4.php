<!-- Crea una función que que dado un array devuelva otro con los valores invertidos -->

<?php

    function invertir(...$v){

        $j=0;

        for ($i=count($v)-1; $i >= 0; $i--) { 
            $arr[$j] = $v[$i];
            $j++;

        }
        return $arr;
    }


    foreach(invertir(1,2,3,4) as $num){
        echo $num." ";
    }
?>