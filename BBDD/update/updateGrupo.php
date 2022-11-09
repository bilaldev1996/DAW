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

    include '../connect.php';
    $idGrupo = $_GET['idGrupo'];
    $sql = "SELECT * FROM Grupo WHERE idGrupo = '$idGrupo'";
    $result = $conn->query($sql);
    
    
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $nombre = $row['nombre'];
            $curso = $row['curso'];
        }
    }else{
        echo "no hay datos";
    }
    

    /* crear formulario */
    echo "<div class='container-md mt-2 w-50'>";
    echo "<h2>Editar Grupo</h2>";
    echo "<fieldset class='border p-2'>
        <legend class='w-auto'>Datos del Grupo</legend>
        <form action='#' method='POST'>
            <div class='mb-3'>
                <label for='nombre' class='form-label'>Nombre</label>
                <input type='text' class='form-control' id='nombre' name='nombre' value='$nombre'>
            </div>
            <div class='mb-3'>
                <label for='curso' class='form-label'>Curso</label>
                <input type='text' class='form-control' id='curso' name='curso' value='$curso'>
            </div>
            <button type='submit' class='btn btn-warning mb-2' name='update'>Actualizar</button>
            <a type='button' class='btn btn-primary mb-2' onclick='history.go(-1)'>Volver</a>
            </form>";
            
    echo "</div>";

        /* actualizar datos */
        if(isset($_POST['update'])){
            $nombre = $_POST['nombre'];
            $curso = $_POST['curso'];

            $sql = "UPDATE Grupo SET nombre = '$nombre', curso = '$curso' WHERE idGrupo = '$idGrupo'";

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

            if($conn->query($sql) === TRUE){
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Grupo actualizado',
                        text: 'El grupo se ha actualizado correctamente',
                        confirmButtonText: 'Aceptar'
                    }).then((result) => {
                        if(result.isConfirmed){
                            window.location = '../delete/deleteUpdateGrupo.php';
                        }
                    })
                </script>";
            }else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
    
</body>
</html>