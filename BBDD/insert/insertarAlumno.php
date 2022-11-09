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

<body class="container-xl mt-3">
    <!-- crear formulario -->
    <fieldset class="border m-3 p-3">
        <legend>Formulario Ingreso Alumno</legend>
        <form action="#" method="post" class="form-row">
            <div class="mb-3 form-floating col-md-6">
                <input type="text" name="nombre" id="nombre" class=" form-control" placeholder="bilal">
                <label for="nombre">Nombre</label>
            </div>
            
            <div class=" mb-3 form-floating col-md-6">
                <input type="text" name="apellidos" id="apellidos" class=" form-control" placeholder="al messaoui">
                <label for="apellidos">Apellidos</label>
            </div>
            <div class="mb-3 form-floating col-md-2">
                <input type="tel" name="expediente" id="expediente" class=" form-control" placeholder="204" required>
                <label for="expediente">Expediente</label>
            </div>
            <div class="mb-3 form-floating col-md-2">
                <input type="tel" name="telefono" id="telefono" class=" form-control" placeholder="645789123">
                <label for="telefono">Telefono</label>
            </div>
            <div class="mb-3 form-floating col-md-6">
                <input type="email" name="email" id="email" class=" form-control" placeholder="204@cifpceuta.es">
                <label for="email">Email</label>
            </div>
            <!-- select para el grupo haciendo consulta php0 -->
            <div class="form-floating">
                <select name="grupo" id="grupo" class="form-select w-25" required>
                    <?php
                        //conexion
                        include('../connect.php');
                        //consulta
                        $consulta = "SELECT * FROM Grupo";
                        //ejecutar consulta
                        $resultado = mysqli_query($conn, $consulta);
                        
                        //recorrer el resultado
                        while($fila = mysqli_fetch_array($resultado)){
                            echo "<option value='".$fila['idGrupo']."'>".$fila['nombre']."</option>";
                        }
                    ?>
                </select>
                <label for="grupo">Elige un grupo</label>
                <script>
                    /* si no hay grupos en el select */
                    if(document.getElementById('grupo').value == ""){
                        document.getElementById('grupo').disabled = true;
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'No hay grupos disponibles',
                                footer: '<a href="../insert/insertarGrupos.php">Crear grupo</a>',
                                /* al clickar fuera no se cierre */
                                allowOutsideClick: false,
                            })
                    }
                </script>
            </div>
            <input type="submit" value="Enviar" name="enviar" class="btn btn-primary mt-2 mb-2 col-md-2">
            <a href="../index.php" class="btn btn-info mt-2 mb-2 col-md-1 ">Volver</a>
        </form>
    </fieldset>
        <?php
        //comprobar si se ha enviado el formulario
            if(isset($_POST['enviar'])){

            /*  include("conexion.php");
                include("conectar.php"); */
                include('../connect.php');
                //recoger datos del formulario
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $expediente = $_POST['expediente'];
                $telefono = $_POST['telefono'];
                $email = $_POST['email'];
                $grupo = intval($_POST['grupo']);

                /* verificar si el expediente existe */
                $verificar = mysqli_query($conn, "SELECT * FROM Alumno WHERE expediente = '$expediente'");
                if(mysqli_num_rows($verificar) > 0){
                    echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Ya existe un alumno con este expediente'
                            allowOutsideClick: false,
                        })
                    </script>";
                }

                //consulta
                $consulta = "INSERT INTO Alumno (nombre, apellidos, expediente, telefono, email, Grupo_idGrupo) VALUES ('$nombre', '$apellidos', '$expediente', '$telefono', '$email', '$grupo')";

                //comprobar si se ha insertado y ejecutar consulta
                if(mysqli_query($conn, $consulta)){
                    ?>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Alumno insertado correctamente</h4>
                        <p>El alumno <?php echo $nombre." ".$apellidos ?> se ha insertado correctamente</p>
                    <?php
                }else{
                    echo "Error: " . $sql . "<br>" . $conn->connect_error;
                }

                //cerrar conexion
                mysqli_close($conn);
            }
        ?>
</body>
</html>