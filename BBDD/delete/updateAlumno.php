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
<body>


    <?php

    include './connect.php';

    $idAlumno = $_GET['idAlumno'];
    $sql = "SELECT * FROM Alumno WHERE idAlumno = '$idAlumno'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $idAlumno = $row['idAlumno'];
            $expediente = $row['expediente'];
            $nombre = $row['nombre'];
            $apellido = $row['apellidos'];
            $telefono = $row['telefono'];
            $email = $row['email'];

            /* devolver nombre del grupo */
            $grupo = mysqli_fetch_assoc(mysqli_query($conn, "SELECT nombre FROM Grupo WHERE idGrupo = ".$row['Grupo_idGrupo']))['nombre'];
        }
    }

    /* crear formulario */
    echo "<div class='container-md mt-2 w-50'>";
    echo "<h2>Editar alumno</h2>";
    echo "<form action='#' method='POST'>
            <div class='mb-3'>
                <label for='expediente' class='form-label'>Expediente</label>
                <input type='text' class='form-control bg-info' id='expediente' name='expediente' value='$expediente' readonly>
            </div>
            <div class='mb-3'>
                <label for='nombre' class='form-label'>Nombre</label>
                <input type='text' class='form-control' id='nombre' name='nombre' value='$nombre'>
            </div>
            <div class='mb-3'>
                <label for='apellido' class='form-label'>Apellido</label>
                <input type='text' class='form-control' id='apellido' name='apellido' value='$apellido'>
            </div>
            <div class='mb-3'>
                <label for='telefono' class='form-label'>Telefono</label>
                <input type='text' class='form-control' id='telefono' name='telefono' value='$telefono'>
            </div>
            <div class='mb-3'>
                <label for='email' class='form-label'>Email</label>
                <input type='email' class='form-control' id='email' name='email' value='$email'>
            </div>
            <div class='mb-3'>
                <label for='grupo' class='form-label'>Grupo</label>
                <input type='text' class='form-control bg-info' id='grupo' name='grupo' value='$grupo' readonly>
            </div>
            <button type='submit' class='btn btn-warning mb-2' name='update'>Update</button>
        </form>";

    echo "</div>";

        /* actualizar datos */
        if(isset($_POST['update'])){
            $expediente = $_POST['expediente'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $grupo = $_POST['grupo'];

            $sql = "UPDATE Alumno SET nombre = '$nombre', apellidos = '$apellido', telefono = '$telefono', email = '$email' WHERE idAlumno = '$idAlumno'";

            if($conn->query($sql) === TRUE){
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Actualizado',
                        text: 'El Alumno se ha actualizado correctamente',
                        confirmButtonText: 'Aceptar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = 'delete&update.php';
                        }
                    })
                </script>";
            }
        }
    ?>
    
</body>
</html>