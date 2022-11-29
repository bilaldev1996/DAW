<?php
    /* uso estricto */
    declare(strict_types=1);
    include_once 'db.php';

    class Note{
    
        public function __construct(
            public string $id,
            public string $title,
            public string $content,
        ){}
    }

    class NoteTabla{

        public function __construct(
            private $tabla = 'note',
            private $conexion = null,
            private array $listaNotas = []
        ){}

        public function getListaNotas(){
            return $this->listaNotas;
        }

        public function getConexion(){
            $this->conexion = new DB();
            return $this->conexion->connect();
        }
        public function getNotas(){
            $sql = "SELECT * FROM $this->tabla";
            $result = $this->getConexion()->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $this->listaNotas[] = new Note(
                        $row['id'],
                        $row['title'],
                        $row['content']
                    );
                }
            }

            return $this->listaNotas;
        }

        public function insertarNotas($title, $content){
            $sql = "INSERT INTO $this->tabla (title, content) VALUES ('$title', '$content')";
            $result = $this->getConexion()->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }
    }
?>