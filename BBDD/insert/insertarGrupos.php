<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
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
            <input type="submit" value="Enviar" name="enviar" class="btn btn-primary mt-2 mb-2 col-md-2">
            <a href="../index.php" class="btn btn-info mt-2 mb-2 col-md-1 ">Volver</a>
        </form>
    </fieldset>
    

    <?php 
    
        if(isset($_POST['enviar'])){
            /* include("conexion.php");
            include("conectar.php"); */
            include("../connect.php");
            /* recoger datos */
            $nombre = $_POST['nombre'];
            $curso = $_POST['curso'];

            $sql = "INSERT INTO Grupo (nombre, curso) VALUES ('$nombre', '$curso')";

            /* verificar si el nombre del grupo insertado existe en la BBDD */
            $verificar = mysqli_query($conn, "SELECT * FROM Grupo WHERE nombre = '$nombre'");
            if(mysqli_num_rows($verificar) > 0){
                ?>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>El grupo ya existe</strong>
                        </div>
                    </div>
                </div>

                <?php
                exit();
            }

            if (mysqli_query($conn, $sql)) {
                ?>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Grupo insertado correctamente</strong>
                        </div>
                    </div>
                <?php
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
    ?>
</body>
</html>