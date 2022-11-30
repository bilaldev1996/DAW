<?php
    
    /* uso estricto */
    declare(strict_types=1);
    include_once './model/note.php';

    class NoteController{

        public function __construct(
            private string $vista,
            private string $pagina,
            private NoteTabla $notaTablaObj
        ){
            $this->vista = 'list_note';
            $this->pagina = 'Listar notas';
            $this->notaTablaObj = new NoteTabla();
        }

        public function getVista(){
            return $this->vista;
        }

        public function getPagina(){
            return $this->pagina;
        }

        public function setVista($vista){
            $this->vista = $vista;
        }

        public function setPagina($pagina){
            $this->pagina = $pagina;
        }

        public function listar(){
            return $this->notaTablaObj->getNotas();
        }

        public function getNota($id){
            return $this->notaTablaObj->getNota($id);
        }

        public function insertar($title, $content){
            $this->notaTablaObj->insertarNota($title, $content);
        }

        public function eliminar($id){
            $this->notaTablaObj->eliminarNota($id);
        }

        public function editar($id, $title, $content){
            $this->notaTablaObj->editarNota($id, $title, $content);
        }

    }
?>