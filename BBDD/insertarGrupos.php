<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Crear formulario grupo -->
    <form action="#" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="curso">Curso</label>
        <input type="text" name="curso" id="curso">
        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php 
        if(isset($_POST['enviar'])){
            include("conexion.php");
            include("conectar.php");
            /* recoger datos */
            $nombre = $_POST['nombre'];
            $curso = $_POST['curso'];

            /* insertar datos omitiendo clave primaria y clave foranea */
            $sql = "INSERT INTO Grupo (idGrupo,nombre, curso) VALUES (1,'$nombre', '$curso')";

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