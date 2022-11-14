<?php

    /* 
    To connect to your database use these details;

    Host: sql8.freesqldatabase.com
    Database name: sql8569824
    Database user: sql8569824
    Database password: UyEAE6yWUr
    Port number: 3306 */
    
    $serverName = "sql8.freesqldatabase.com";
    $userName = "sql8569824";
    $password = "UyEAE6yWUr";
    $dbName = "sql8569824";

    // Create connection
    $conn = new mysqli($serverName, $userName, $password, $dbName);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //echo "Connected successfully";
?>