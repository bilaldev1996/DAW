<?php
    include_once './VideoClub.php';

    $vc = new VideoClub("Severo 8A");



    // incluir soportes de prueba
    $vc->incluirJuego("God of War",1 , 19.99, "PS4", 1, 4);
    $vc->incluirJuego("Fifa 2021", 2 ,60, "PS4", 1, 4);
    $vc->incluirDvd("El Padrino", 4.5, 3,"es", "16:9");
    $vc->incluirDvd("Torrente", 4.5, 4,"es,en,fr", "16:9");
    $vc->incluirCintaVideo("Los cazafantasmas",5 ,3.5, 175);
    $vc->incluirCintaVideo("El nombre de la Rosa",6, 1.5, 140);

    //listar productos
    echo "<h1>Productos</h1>";
    $vc->listarProductos();

    // incluir socios de prueba
    $vc->incluirSocio("Juan",1);
    $vc->incluirSocio("Ana", 2,2);

    $vc->alquilarSocioProducto(1,1);
    $vc->alquilarSocioProducto(1,2);

    //alquilo otra vez el soporte 2 al socio 1
    // ya lo tiene alquilado
    $vc->alquilarSocioProducto(1,6);

    //maximo de alquileres concurrentes alcanzado
    $vc->alquilarSocioProducto(1,3);

    //alquilar un soporte a un socio que no existe
    $vc->alquilarSocioProducto(3,1);

    //alquilar un soporte que no existe
    $vc->alquilarSocioProducto(1,7);


    
    //listar socios
    echo "<h1>Socios</h1>";
    $vc->listarSocios();
?>