<?php
    /* uso estricto */
    declare(strict_types=1);

    include_once 'db.php';

    class Note{

        public function __construct(
            public int $id,
            private string $titulo,
            private string $contenido
        ){}

        /* Getters y Setters */
        public function getTitulo(): string{
            return $this->titulo;
        }

        public function getContenido(): string{
            return $this->contenido;
        }

        public function setTitulo(string $titulo): void{
            $this->titulo = $titulo;
        }

        public function setContenido(string $contenido): void{
            $this->contenido = $contenido;
        }
    }

    class NoteTable{

        public function __construct(
            private $tabla = 'note',
            private $conexion = null,
            private array $notas = array()
        ){}

        /* establecemos conexion */
        public function getConexion(): void{
            $db = new Db();
            $db->connect();
            $this->conexion = $db->conn;
        }

        /* Obtenemos todas las notas */
        public function getNotes(){
            $this->getConexion();
            $sql = "SELECT * FROM $this->tabla";
            $result = $this->conexion;

            /* ejecutar consulta */
            if ($result->query($sql)){
                $result = $result->query($sql);
                while($row = $result->fetch_assoc()){
                    $this->notas[] = new Note(
                        $row['id'],
                        $row['titulo'],
                        $row['contenido']
                    );
                }
            }
            $this->conexion->close();
        }

        /* insertar una nota */
        public function insertNote(){
            $this->getConexion();
            /* crear nota */
            $note = new Note(
                0,
                $_POST['titulo'],
                $_POST['contenido']
            );

            /* insertar nota */
            $sql = "INSERT INTO $this->tabla (titulo, contenido) VALUES ('{$note->getTitulo()}', '{$note->getContenido()}')";
            $result = $this->conexion;

            /* ejecutar consulta */
            if ($result->query($sql)){
                echo "Nota insertada correctamente";
            }else{
                echo "Error al insertar la nota";
            }
            $this->conexion->close();
        }

        /* actualizar una nota */
        public function updateNote(){
            $this->getConexion();
            /* obtener nota */
            $note = new Note(
                $_POST['id'],
                $_POST['titulo'],
                $_POST['contenido']
            );

            /* obtener id */
            $id = $_GET['id'];

            /* actualizar nota */
            $sql = "UPDATE $this->tabla SET titulo = '{$note->getTitulo()}', contenido = '{$note->getContenido()}' WHERE id = {$id}";
            $result = $this->conexion;

            /* ejecutar consulta */
            if ($result->query($sql)){
                echo "Nota actualizada correctamente";
            }else{
                echo "Error al actualizar la nota";
            }
            $this->conexion->close();
        }

        /* eliminar una nota */
        public function deleteNote(){
            $this->getConexion();
            /* obtener id */
            $id = $_GET['id'];

            /* eliminar nota */
            $sql = "DELETE FROM $this->tabla WHERE id = {$id}";
            $result = $this->conexion;

            /* ejecutar consulta */
            if ($result->query($sql)){
                echo "Nota eliminada correctamente";
            }else{
                echo "Error al eliminar la nota";
            }
            $this->conexion->close();
        }
    }

?>