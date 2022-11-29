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

        public function listar() : array{
            $listaNotas = $this->notaTablaObj->getNotas();
            $this->setPagina('Listar notas');
            $this->setVista('list_note');
            return $listaNotas;
        }

        public function insertar($title, $content){
            $this->setPagina('Insertar nota');
            $this->setVista('insert_note');
            $this->notaTablaObj->insertarNotas($title, $content);
        }
    }
?>