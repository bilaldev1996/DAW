<?php

    /* 
    Host: sql7.freesqldatabase.com
    Database name: sql7548031
    Database user: sql7548031
    Database password: RE4yrrNWA2 */
    
    $serverName = "sql7.freesqldatabase.com";
    $userName = "sql7548031";
    $password = "RE4yrrNWA2";
    $dbName = "sql7548031";

    // Create connection
    $conn = new mysqli($serverName, $userName, $password, $dbName);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //echo "Connected successfully";
?>