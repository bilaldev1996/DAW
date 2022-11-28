<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- Almacena en un array bidimensional la matrícula, marca y modelo de tantos vehículos como el usuario quiera introducir mediante un formulario. 
        Recorre el array y muestra por pantalla la información en una tabla. -->
        <?php
            if(!$_POST) {
        ?>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="num">¿Cuántos vehiculos deseas introducir?</label>
            <input type="text" name="num" />
            <input type="submit" name="submit" value="Enviar" />
        </form>
        <?php 
            }elseif(!empty($_POST['num'])){
                $elementos = $_POST['num'];
                $arrayCoches = [[]];
                echo "<p>Introduzca los datos</p>";
                echo "<form action='#' method='post'>";
                echo "<input type='hidden' name='coches' value='$elementos'>";//para mandar al siguiente else el numero de coches que ha introducido el usuario
            
                echo ("<table>");
                echo ("<tr><th>Matrícula</th><th>Marca</th><th>Modelo</th></tr>");
                
                for ($i=0; $i<$elementos; $i++){
                    echo ("<tr>");
                    echo "<td><input type='text' name='matricula$i'></td>";
                    echo "<td><input type='text' name='marca$i'></td>";
                    echo "<td><input type='text' name='modelo$i'></td>"; 
                    echo ("</tr>");
                }
            
                echo ("</table>");
                
                echo "<input type='submit' name='enviar' value='enviar'><br>";
                echo "</form>";
            }elseif(!empty($arrayCoches)){
                echo ("<table>");
                echo ("<tr><th>Matrícula</th><th>Marca</th><th>Modelo</th></tr>");
                
                // Bucle para introducir elementos en el array BIdemensional
                for ($i=0; $i<$_POST['coches']; $i++){
                        $arrayCoches[$i]['matricula'] = $_POST['matricula'.$i];
                        $arrayCoches[$i]['marca'] = $_POST['marca'.$i];
                        $arrayCoches[$i]['modelo'] = $_POST['modelo'.$i];
                }

                //Bucle para imprimir el array en una tabla
                for ($i=0; $i<$_POST['coches']; $i++){
                    echo ("<tr>");
                    echo "<td>".$arrayCoches[$i]['matricula']."</td>"; 
                    echo "<td>".$arrayCoches[$i]['marca']."</td>"; 
                    echo "<td>".$arrayCoches[$i]['modelo']."</td>"; 
                    echo ("</tr>");
                }

                echo ("</table>");

            ?>
        <?php
            }else{
        ?>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="num">¿Cuántos vehiculos deseas introducir?</label>
            <input type="text" name="num" />
            <input type="submit" name="submit" value="Enviar" />
        </form>
        <?php } ?>
    </body>
</html>