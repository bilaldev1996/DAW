<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        table{
            border-collapse: collapse;
            margin: auto;
        }
        td{
            border: 2px lightgray solid;
            width: 2em;
            height: 2em;
            text-align: center;
        }
        .azul{
            background-color: rgb(200, 200, 150);
        }
    </style>
    <body>
        <!-- Defina un programa que muestre en pantalla una tabla de 10 x 10 con los números del 1 al 100, coloreando las filas de forma alternada en gris y blanco. -->
        <?php
            const FILAS = 10;
            const COLUMNAS = 10;
            $k = 1;

            echo "<table>";
                for ($i=0; $i <FILAS ; $i++) { 
                    echo "<tr>";
                        for ($j=0; $j <COLUMNAS ; $j++) { 
                            if(!($i%2) == 0){
                                echo "<td class='azul'>".$k."</td>";
                            }else{
                                echo "<td>".$k."</td>";
                            }
                            $k++;
                        }
                    echo "</tr>";

                }
            echo "</table>";

        ?>
    </body>
</html>