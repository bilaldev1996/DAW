<?php
    include_once './CintaVideo.php';
    include_once './Dvd.php';
    include_once './Juego.php';
    include_once './Cliente.php';

    $cliente1 = new Cliente("Juan", 25);
    $cliente2 = new Cliente("Ana", 35);

    echo "<br> El identificador del cliente 1 es: " . $cliente1->getNumero();
    echo "<br> El identificador del cliente 2 es: " . $cliente2->getNumero();

    $soporte1 = new CintaVideo("Los cazafantasmas", 23, 3.5, 120);
    $soporte2 = new Juego("Mario Bros", 24, 4.5, "PS4", 1, 1);
    $soporte3 = new Dvd("Origen",25,15,"es,en,fr","16:9");
    $soporte4 = new Dvd("El imperio contraataca",26,3,"es,en","16:9");

    $cliente1->alquilar($soporte1);
    $cliente1->alquilar($soporte2);
    $cliente1->alquilar($soporte3);

    //volver a alquilar el mismo soporte
    $cliente1->alquilar($soporte1);


    //el cliente tiene 3 soportes en alquiler como máximo
    //este soporte no se alquilará
    $cliente1->alquilar($soporte4);

    //este soporte no lo tiene alquilado
    $cliente1->devolver(4);

    //este soporte lo tiene alquilado
    $cliente1->devolver(23);

    //alquilar otro soporte
    $cliente1->alquilar($soporte4);

    //listar los soportes alquilados por el cliente
    $cliente1->listarAlquileres();

    //este cliente no tiene alquileres
    $cliente2->listarAlquileres();


?>