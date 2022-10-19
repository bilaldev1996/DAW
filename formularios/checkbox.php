<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            if(isset($_POST['enviar']) && !empty($_POST['deportes']) && !empty($_POST['nombre'])){
                $nombre = $_POST['nombre'];
                $deportes = $_POST['deportes'];

                echo "<h1>$nombre</h1>";

                foreach($deportes as $deporte){
                    echo "<ul>";
                        echo "<li>$deporte</li>";
                    echo "</ul>";
                }
            }else {
        ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <legend>Formulario</legend>
                    <p>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre">
                    </p>
                    <p>
                        <label for="deportes">Deportes favoritos:</label><br/>
                        Fútbol<input type="checkbox" name="deportes[]" value="futbol"><br/>
                        Tenis<input type="checkbox" name="deportes[]" value="tenis"><br/>
                        Padel<input type="checkbox" name="deportes[]" value="padel"><br/>
                        Baloncesto<input type="checkbox" name="deportes[]" value="baloncesto"><br/>
                    </p>
                    <p>
                        <input type="submit" name="enviar" value="Enviar">
                    </p>
                </fieldset>
            </form>
        <?php
            echo "<p style='color:red'>***El formulario no se puede mandar vacío</p>";
            }
        ?>
    </body>
</html>