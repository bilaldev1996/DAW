<!-- Insertar datos en una base de datos -->
<?php
    include("conexion.php");
    include("conectar.php");
    /* insertar datos */
    $insertar = mysqli_query($conectar, "INSERT INTO clientes (nombre, apellidos) VALUES ('Samia', 'El Azzouzi')");
    if (!$insertar) {
        die("No se pudo insertar los datos: " . mysqli_connect_error());
    }
    echo "4.Datos insertados satisfactoriamente <br />";
    echo "--------------------------------------";
?>