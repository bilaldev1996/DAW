<?php
    include_once './Soporte.php';

    class Dvd extends Soporte{
        
        public function __construct(
            string $titulo, int $numero, 
            float $precio, 
            public string $idiomas,
            private string $formatPantalla
            ){
            parent::__construct($titulo, $numero, $precio);
        }

        public function muestraResumen(): string{
            return parent::muestraResumen() . "<br> Idiomas: " . $this->idiomas . "<br> Formato de pantalla: " . $this->formatPantalla;
        }
    }
?>