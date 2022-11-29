<?php

    /* uso estricto */
    declare(strict_types=1);
    include_once ('./config/config.php');
    /* Es una clase que se conecta a una base de datos. */
    class DB {
        public function __construct(
            private string $host = HOST,
            private string $user = USER,
            private string $password = PASSWORD,
            private string $db = DBNAME
        ){}

        /**
         * Se conecta a la base de datos y devuelve la conexión.
         * 
         * @return mysqli El objeto de conexión.
         */
        public function connect(): mysqli {
            $connection = new mysqli($this->host, $this->user, $this->password, $this->db);
            if ($connection->connect_errno) {
                die('Error de conexión: ' . $connection->connect_errno);
            }
            //echo 'Conexión exitosa';
            return $connection;
        }
    }
?>