<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap-icons//font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="container-xl">

    <?php

    include("../connect.php");
    /* Tabla Grupos */
    $sql = "SELECT * FROM Grupo";
    $resultado = mysqli_query($conn, $sql);
    ?>
    <div class='container-lg mt-5'>
    <h1>Grupos</h1>
    <?php
    echo "<table class='table table-striped table-hover table-bordered'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Curso</th>
                        <th colspan='2' class='text-center'>Acciones</th>
                    </tr>
                    
                </thead>
                <tbody>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                    <td>" . $fila['idGrupo'] . "</td>
                    <td>" . $fila['nombre'] . "</td>
                    <td>" . $fila['curso'] . "</td>
                    <td><a class='btn btn-danger btn-grupo' name='deleteGrupo'>Delete <i class='bi bi-trash-fill'></i></a></td>
                    <script>
                        document.querySelectorAll('.btn-grupo').forEach((item) => {
                            item.addEventListener('click', (e) => {
                               let id = e.target.parentNode.parentNode.children[0].innerHTML;
                                 Swal.fire({
                                        title: '¿Estas seguro?',
                                        text: 'No podras revertir los cambios',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Si, borrar'
                                  }).then((result) => {
                                        if (result.isConfirmed) {
                                         window.location.href = './deleteGrupo.php?id='+id;
                                        }
                                  })
                            })
                        })
                    </script>
                    <td><a class='btn btn-warning' href='../update/updateGrupo.php?idGrupo=" . $fila['idGrupo'] . "'>Edit <i class='bi bi-pencil-fill'></i></a></td>
                </tr>";
    }
    echo "</tbody></table>";

    //cerrar conexion
    $conn->close();

    ?>
    </div>
    <!-- boton volver a inicio -->
    <a class='btn btn-primary m-2' href='../index.php'>Volver a inicio</a>
    </div>

</body>

</html>