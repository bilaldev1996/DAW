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

        <!-- consulta hacia todos los alumnos -->
        <?php 
            include("conexion.php");
            include("conectar.php");
            $sql = "SELECT * FROM alumno";
            $resultado = mysqli_query($conectar, $sql);
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
            while($fila = mysqli_fetch_assoc($resultado)){
                /* imprimir tabla con todos los alumnos */
                echo "<tr>
                        <td>".$fila['nombre']."</td>
                        <td>".$fila['apellidos']."</td>
                        <td>".$fila['expediente']."</td>
                        <td>".$fila['telefono']."</td>
                        <td>".$fila['email']."</td>
                        <td>".mysqli_fetch_assoc(mysqli_query($conectar, "SELECT nombre FROM grupo WHERE idGrupo = ".$fila['Grupo_idGrupo']))['nombre']."</td>
                    </tr>";
            }
            echo "</tbody>
            </table>";
            echo "</div>";
        ?>
    </body>
</html>