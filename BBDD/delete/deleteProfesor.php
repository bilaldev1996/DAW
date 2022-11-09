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

        include("../connect.php");

        /* deshabilitar foreign key para que pueda eliminar */
        $forkey = "SET FOREIGN_KEY_CHECKS = 0";
        $result = mysqli_query($conn, $forkey);


        $idProfesor = $_GET['id'];
        $sql = "DELETE FROM Profesor WHERE idProfesor = '$idProfesor'";

        /* borrar registro de la tabla tutoria */
        $sql2 = "DELETE FROM Tutoria WHERE Profesor_idProfesor = '$idProfesor'";
        $result2 = mysqli_query($conn, $sql2);

        /* borrar grupo asignado al profesor en la tabla tutoria */
        $sql3 = "UPDATE Tutoria SET Grupo_idGrupo = NULL WHERE Profesor_idProfesor = '$idProfesor'";
        $result3 = mysqli_query($conn, $sql3);
        
        

        if($conn->query($sql)){
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Eliminado',
                    text: 'El Profesor se ha eliminado correctamente',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'delete&updateProfesor.php';
                    }
                })
            </script>";
        }else{
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'El Profesor no se ha eliminado correctamente',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'delete&update.php';
                    }
                })
            </script>";
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    

    ?>
</body>
</html>