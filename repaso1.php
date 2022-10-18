<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- Realiza una función que dado una serie de valores, devuelva su promedio. Para probarla, se deberán pedir dichos valores en un formulario. -->
        <?php
            if(isset($_POST['Enviar'])){
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $numero3 = $_POST['numero3'];
                $numero4 = $_POST['numero4'];
                $numero5 = $_POST['numero5'];
                $numero6 = $_POST['numero6'];

                $arr = [$numero1, $numero2, $numero3, $numero4, $numero5, $numero6];
                
                function media($arr){
                    $media = 0;
                    foreach($arr as $valor){
                        $media += $valor;
                    }
                    $media = $media / count($arr);
                    echo $media;
                }
                media($arr);
            } else {
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <label for="number">Introduce los números para generar la media : </label><br />
                <input type="number" name="numero1"><br />
                <input type="number" name="numero2"><br />
                <input type="number" name="numero3"><br />
                <input type="number" name="numero4"><br />
                <input type="number" name="numero5"><br />
                <input type="number" name="numero6"><br />
                <input type="submit" name="Enviar" value="Enviar">
            </form>
            <?php
                } 
            ?>
    </body>
</html>