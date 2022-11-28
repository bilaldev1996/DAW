<?php
    function peseta2euros(float $cant, float $cotiz = 0.0060){

        //1000pesetas = 6euros;
        $cambio = $cant * $cotiz;
        //echo $cant. " pesetas = " . $cambio . " euros <br/>";
        return $cambio;
    }

    peseta2euros(1000);

    function euros2pesetas(float $cant, float $cotiz = 166.38) {
        //1 euro = 166.38
        $cambio = $cant * $cotiz;
        //echo $cant . " euros = " . number_format($cambio,2) . " pesetas" ;
        return $cambio;
    }

    euros2pesetas(1000);
?>