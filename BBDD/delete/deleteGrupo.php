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


        $idGrupo = $_GET['id'];
        /* AL BORRAR EL GRUPO borrar */
        $sql = "DELETE FROM Grupo WHERE idGrupo = '$idGrupo' ";

        /* borrar alumnos que existen dentro del grupo */
        $sql2 = "DELETE FROM Alumno WHERE Grupo_idGrupo = '$idGrupo'";
        $result2 = mysqli_query($conn, $sql2);


        if($conn->query($sql) === TRUE){
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Eliminado',
                    text: 'El Grupo se ha eliminado correctamente',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'delete&updateGrupo.php';
                    }
                })
            </script>";
        }
    

    ?>
</body>
</html>