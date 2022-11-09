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

    <div class="container">
        <?php

        include("../connect.php");

        $sql = "SELECT * FROM Alumno";
        $resultado = mysqli_query($conn, $sql);
        ?>
        
        <div class='container-lg mt-5'>
        <h2>Alumnos</h2>
        <table class='table table-striped table-hover table-bordered'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Expediente</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Grupo</th>
                            <th colspan='3' class='text-center'>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
        <?php 
        while ($fila = mysqli_fetch_assoc($resultado)) {
            /* imprimir tabla con todos los alumnos */
            ?>
            <tr>
                <?php
                    echo "<td>" . $fila['idAlumno'] . "</td>";
                    echo "<td>" . $fila['nombre'] . "</td>";
                    echo "<td>" . $fila['apellidos'] . "</td>";
                    echo "<td>" . $fila['expediente'] . "</td>";
                    echo "<td>" . $fila['telefono'] . "</td>";
                    echo "<td>" . $fila['email'] . "</td>";
                    echo "<td>" . $fila['Grupo_idGrupo'] . "</td>";
                ?>
                <td><?php mysqli_fetch_assoc(mysqli_query($conn,"SELECT nombre FROM Grupo WHERE idGrupo = $fila[Grupo_idGrupo]"))['nombre']?></td>
                <td><a class='btn btn-danger btn-alumno' name='deleteAlumno'>Delete <i class='bi bi-trash-fill'></i></a></td>
                <script>
                    document.querySelectorAll('.btn-alumno').forEach((item) => {
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
                                        window.location.href = './deleteAlumno.php?id='+id;
                                    }
                                })
                        })
                    })
                </script>
                <?php
                    echo "<td><a class='btn btn-warning btn-alumno' name='updateAlumno' href='../update/updateAlumno.php?idAlumno=". $fila['idAlumno'] ." '>Edit <i class='bi bi-pencil-fill'></i></a></td>";
                ?>
            </tr>
            <?php
        }
        ?>
        </tbody></table>

        <!-- boton volver a inicio -->
        <a class='btn btn-primary' href='../index.php'>Volver a inicio</a>

        <?php
            //cerrar conexion
            $conn->close();

        ?>
    </div>
    </div>

</body>

</html>