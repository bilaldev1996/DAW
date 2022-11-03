<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="container-xl mt-3 ">
    <!-- Crear formulario grupo -->
    <fieldset class="border m-3 p-3">
        <legend>Formulario Ingreso Grupo</legend>
        <form action="#" method="post" class="form-row">
            <div class="mb-3 form-floating col-md-6">
                <input type="text" name="nombre" id="nombre" class=" form-control" placeholder="bilal">
                <label for="nombre">Nombre</label>
            </div>
            
            <div class=" mb-3 form-floating col-md-6">
                <input type="text" name="curso" id="curso" class=" form-control" placeholder="DAW">
                <label for="curso">Curso</label>
            </div>
            <input type="submit" value="Enviar" name="enviar" class="btn btn-primary mt-2 mb-2 col-md-4">
        </form>
    </fieldset>
    

    <?php 
        if(isset($_POST['enviar'])){
            include("conexion.php");
            include("conectar.php");
            /* recoger datos */
            $nombre = $_POST['nombre'];
            $curso = $_POST['curso'];

            /* insertar datos omitiendo clave primaria y clave foranea */
            $sql = "INSERT INTO grupo (nombre, curso) VALUES ('$nombre', '$curso')";

            if (mysqli_query($conectar, $sql)) {
                echo "<h2>Nuevo registro creado satisfactoriamente</h2>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conectar);
            }
        }
    ?>
</body>
</html>