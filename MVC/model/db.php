<?php
    include ('../config/config.php');
    /* Es una clase que se conecta a una base de datos. */
    class DB {
        public static function connect() {
            $conn = new mysqli(HOST, USER, PASSWORD, DBNAME);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                echo "Connection failed: " . $conn->connect_error;
            }
            echo "Connected successfully";
            return $conn;
        }
        
    }
    
    /* Llamar al método estático `connect()` desde la clase `DB`. */
    $db = DB::connect();
?>