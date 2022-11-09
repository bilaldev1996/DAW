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

    $idProfesor = $_GET['idProfesor'];
    $sql = "SELECT * FROM Profesor WHERE idProfesor = '$idProfesor'";
    $result = $conn->query($sql);


    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $idAlumno = $row['idProfesor'];
            $nombre = $row['nombre'];
            $apellido = $row['apellidos'];
            $telefono = $row['telefono'];
            $email = $row['email'];
        }
    }

    /* crear formulario */
    echo "<div class='container-md mt-2 w-50'>";
    echo "<h2>Editar Profesor</h2>";
    echo "<fieldset class='border p-2'>
        <legend class='w-auto'>Datos del Profesor</legend>
        <form action='#' method='POST'>
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
            </div>";
            $group = $_GET['grupo'];
                if($group != 'Sin grupo'){
                    echo "<input type='text' value='$group' class='form-control bg-info' disabled />";   
                }else{
                ?>
            <select class='form-select' aria-label='Default select example' name='idGrupo'>
                <option selected>Selecciona el profesor</option>";
                <?php
                    $sql = "SELECT * FROM Grupo";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<option value='".$row['idGrupo']."'>".$row['nombre']."</option>";
                    }
                    
                }
            echo "</select>
            <button type='submit' class='btn btn-warning mb-2 mt-2' name='update'>Actualizar</button>
            <a type='button' class='btn btn-primary' onclick='history.go(-1)'>Volver</a>
        </form>";

    echo "</div>";

        /* actualizar datos */
        if(isset($_POST['update'])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $idGrupo = $_POST['idGrupo'];

            $sql = "UPDATE Profesor SET nombre = '$nombre', apellidos = '$apellido', telefono = '$telefono', email = '$email' WHERE idProfesor = '$idProfesor'";

            if($conn->query($sql) === TRUE){
                echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Profesor actualizado',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function(){
                            window.location.href = '../delete/delete&updateProfesor.php';
                        });
                    </script>";
            }

            if($idGrupo != 0){
                $sql2 = "INSERT INTO Tutoria (Grupo_idGrupo, Profesor_idProfesor) VALUES ('$idGrupo', '$idProfesor')";
                if($conn->query($sql2) === TRUE){
                    echo "<script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Profesor actualizado con grupo',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function(){
                                window.location.href = '../delete/delete&updateProfesor.php';
                            });
                        </script>";
                }
            }
            
        }
    ?>
    
</body>
</html>