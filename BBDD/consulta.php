<?php
    include("conexion.php");
    include("conectar.php");
    /* realizar consulta */
    $consulta = mysqli_query($conectar, "SELECT * FROM clientes");
    if (!$consulta) {
        die("No se pudo realizar la consulta: " . mysqli_connect_error());
    }
    echo "3.Consulta realizada satisfactoriamente <br />";
    echo "--------------------------------------";
    /* mostrar consulta en una tabla */
    echo "<table border='1'>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>";
    while ($row = mysqli_fetch_array($consulta)) {
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['apellidos'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>