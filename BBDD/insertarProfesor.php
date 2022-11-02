<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="#" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos">
        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php
        if(isset($_POST['enviar'])){
            include("conexion.php");
            include("conectar.php");
            /* recoger datos */
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            /* insertar datos omitiendo clave primaria y clave foranea */
            $sql = "INSERT INTO Profesor (idProfesor,nombre, apellidos) VALUES (1,'$nombre', '$apellidos')";
            if (mysqli_query($conectar, $sql)) {
                echo "4.Nuevo registro creado satisfactoriamente <br />";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conectar);
            }
            echo "--------------------------------------";
        }
    ?>
</body>
</html>