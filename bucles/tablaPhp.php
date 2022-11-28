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
            td,th{
                border: 2px lightgray solid;
                width: 4em;
                height: 2em;
                text-align: center;
            }
    </style>
    <body>
        <form action="#" method="POST">
            <fieldset>
                <legend>Formulario</legend>
                <p>
                    <label for="name">Nombre:</label> 
                    <input type="text" name="nombre">
                </p>
                <p>
                    <label for="apellidos">Apellidos:</label> 
                    <input type="text" name="apellidos">
                </p>
                <p>
                    <label for="email">Email:</label> 
                    <input type="email" name="email">
                </p>
                <p>
                    <input type="submit" name="enviar" value="Enviar">
                </p>
            </fieldset>
        </form>
        <?php
            if(isset($_POST['enviar'])){

                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $email = $_POST['email'];

                echo "<table>";
                    echo "<tr>";
                        echo "<th>Nombre</th><th>Apellidos</th><th>Email</th>";
                    echo "</tr>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>$nombre</td>";
                        echo "<td>$apellidos</td>";
                        echo "<td>$email</td>";
                    echo "</tr>";
                echo "</table>";
                foreach($_POST as $key => $value) {
                    if(empty($value)) {
                        echo 'true';
                    }else{
                        echo $value; //almacena el valor de las variables
                    }
                }
            }
        ?>
    </body>
</html>