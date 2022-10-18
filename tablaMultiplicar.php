<?php 
    /*  Muestra dentro de una tabla HTML la tabla de multiplicar del numero que reciba como parámetro. Utiliza <thead> con sus respectivos <th> y <tbody> para dibujar la tabla. */
    function tablaMultiplicar($num){
        
        echo "<table border='1'>";
        echo "<th>Tabla del: $num</th>";
        echo "<tr>";
        for ($i=1; $i <=10 ; $i++) { 
            //echo $num. "*" . $i. "=". ($num*$i). "<br>"; 
            echo "<td>$num X $i =". ($num*$i) . "</td>"; 
            echo "</tr>";
        }
        echo "</table>";
    }
    tablaMultiplicar(10);
?>