<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Diseñe un programa que genere un número aleatorio entre 1 y 20 y calcule su sumatorio. Por ejemplo, si sale el 5, el sumatorio desde 1 hasta 5 que son 15. -->

    <?php
        $aleatorio = rand(1,20);
        $suma = 0;

        echo  'Numero aleatorio:'.$aleatorio ."<br/>";

        for ($i=1; $i <=$aleatorio ; $i++) { 
            //echo $i."<br/>";
            $suma+=$i;
        }

        echo 'La suma es:' .  $suma;
    ?>
</body>
</html>