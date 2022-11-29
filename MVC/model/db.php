<?php
    include ('../config/config.php');
    /* Es una clase que se conecta a una base de datos. */
    class Db {

        public function __construct(
            private $host = HOST,
            private $user = USER,
            private $password = PASSWORD,
            private $dbname = DBNAME,
            public $conn = null
        ) {
        }

        /**
         * Se conecta a la base de datos.
         */
        public function connect() {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }

            echo "Connected to database successfully";
        }
    }
?>