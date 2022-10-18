<?php 
    /* Escribe un programa que almacene en variables tu nombre, primer apellido, segundo apellido, email, año de nacimiento y teléfono. Luego muéstralos por pantalla dentro de una tabla. */
    $nombre = "Bilal";
    $apellido= "Al messaoui";
    $email = "204@cifpceuta.es";
    $anioNacimiento= 1996;
    $telefono = 677845195;

    echo "<table border='1'>";
    echo "<tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Año Nacimiento</th>
        <th>Telefono</th>
    </tr>";
    echo "<tr>
        <td>$nombre</td>
        <td>$apellido</td>
        <td>$email</td>
        <td>$anioNacimiento</td>
        <td>$telefono</td>
    </tr>";
    echo "</table>";

?>