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
    <body class="container-xl mt-5">

    
        
        <!-- Hacer consulta a la base de datos grupo -->
        <?php 

            include("../connect.php");
            $sql = "SELECT * FROM Grupo";
            $resultado = mysqli_query($conn, $sql);
            echo "<h2>Consultar Grupos</h2>";
            while($fila = mysqli_fetch_assoc($resultado)){
                /* hacer consulta de todos los alumnos y profesores del grupo */
                echo "<a href='consultarProfesorAlumno.php?idGrupo=".$fila['idGrupo']."' class='btn btn-info m-2'>".$fila['nombre']."</a>";
            }
            echo "<br>";
            echo "<a onclick='history.go(-1)' class='btn btn-primary m-1'>Volver</a>";

            mysqli_close($conn);
        ?>

    </body>
</html>