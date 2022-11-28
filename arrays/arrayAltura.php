<?php 
    /* Mediante un array bidimensional, almacena el nombre, altura y email de 5 personas. Para ello, crea un array de personas, siendo cada persona un array asociativo: [ ['nombre'=>'Aitor', 'altura'=>182, 'email'=>'aitor@correo.com'],[…],… ] Posteriormente, recorre el array y muéstralo en una tabla HTML. */

    $personas = [
        [
            'nombre' => 'Bilal',
            'altura' => '172',
            'email' => 'bilal@gmail.com'
        ],
        [
            'nombre' => 'ramia',
            'altura' => '168',
            'email' => 'ramia@gmail.com'
        ],
        [
            'nombre' => 'mohamed',
            'altura' => '185',
            'email' => 'mohamed@gmail.com'
        ],
        [
            'nombre' => 'anuar',
            'altura' => '175',
            'email' => 'anuar@gmail.com'
        ],
        [
            'nombre' => 'rayan',
            'altura' => '190',
            'email' => 'rayan@gmail.com'
        ]
    ];

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nombre:</th>
                <th>Altura:</th>
                <th>Email:</th>";
    echo "</tr>";
    foreach ($personas as $persona) {

        echo "<tr>";
        foreach ($persona as $person => $data) {
                
            echo "<td>$data</td>";
        }
        echo "</tr>";
        }
    echo "</table>";


?>