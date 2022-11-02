<!-- Insertar datos en una base de datos -->
<?php
    include("conexion.php");
    include("conectar.php");
    /* recoger datos */
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $expediente = $_POST['expediente'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    /* insertar datos omitiendo clave primaria y clave foranea */
    $sql = "INSERT INTO Alumno (idAlumno,nombre, apellidos, expediente, telefono, email,Grupo_idGrupo) VALUES (NULL,'$nombre', '$apellidos', '$expediente', '$telefono', '$email',NULL)";

    if (mysqli_query($conectar, $sql)) {
        echo "4.Nuevo registro creado satisfactoriamente <br />";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conectar);
    }
    echo "--------------------------------------";
?>
