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

        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "mydb";

        // Create connection
        $conn = new mysqli($serverName, $userName, $password, $dbName);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $expediente = $_GET['expediente'];
        $sql = "DELETE FROM alumno WHERE expediente = '$expediente'";

            /* preguntar si desea eliminar */
        if($conn->query($sql) === TRUE){
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Eliminado',
                    text: 'El registro se ha eliminado correctamente',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'delete&update.php';
                    }
                })
            </script>";
        }

        $conn->close();
    ?>
</body>
</html>