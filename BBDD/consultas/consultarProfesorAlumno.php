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
        //conexion
        include("../connect.php");

        //recoger id de la url
        $id = $_GET['idGrupo']; //7

        /* consulta alumno */
        $consulta = "SELECT * FROM Alumno WHERE Grupo_idGrupo = $id";

        if(!$resultado = mysqli_query($conn, $consulta)){
            echo "Error en la consulta";
        }

        //ejecutar consulta
        $resultado = mysqli_query($conn, $consulta);


        /* imprimir resultado de alumno y profesor */
        echo "<div class='container-lg mt-5'>";
        echo "<h2>Alumnos</h2>";
        echo "<table class='table table-striped table-hover table-bordered'>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Expediente</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Grupo</th>
                    </tr>
                </thead>
                <tbody>";
        while($fila = mysqli_fetch_array($resultado)){
            echo "<tr>
                    <td>".$fila['nombre']."</td>
                    <td>".$fila['apellidos']."</td>
                    <td>".$fila['expediente']."</td>
                    <td>".$fila['telefono']."</td>
                    <td>".$fila['email']."</td>
                    <td>".mysqli_fetch_assoc(mysqli_query($conn, "SELECT nombre FROM Grupo WHERE idGrupo = ".$fila['Grupo_idGrupo']))['nombre']."</td>
                </tr>";
        }
        echo "</tbody>
            </table>";
        echo "</div>";

            /* consulta profesor */
            $consulta2 = "SELECT * FROM Tutoria WHERE Grupo_idGrupo = $id"; //
        
            $resultado2 = mysqli_query($conn, $consulta2);
            if(!$resultado2 = mysqli_query($conn, $consulta2)){
                echo "Error en la consulta";
            }    

        echo "<div class='container-lg mt-5'>";
        echo "<h2>Profesores</h2>";
        echo "<table class='table table-striped table-hover table-bordered'>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>";
        while($fila2 = mysqli_fetch_array($resultado2)){

            $idProfesor = $fila2['Profesor_idProfesor'];
            $consulta3 = "SELECT * FROM Profesor WHERE idProfesor = $idProfesor";
            $resultado3 = mysqli_query($conn, $consulta3);
            while($fila3 = mysqli_fetch_array($resultado3)){
                echo "<tr>
                        <td>".$fila3['nombre']."</td>
                        <td>".$fila3['apellidos']."</td>
                        <td>".$fila3['telefono']."</td>
                        <td>".$fila3['email']."</td>
                    </tr>";
            }
        }
        echo "</tbody>
            </table>";
        echo "</div>";

        //cerrar conexion
        mysqli_close($conn);
        
    ?>
</body>
</html>