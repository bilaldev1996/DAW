<?php
    declare(strict_types=1);
    include_once './CintaVideo.php';
    include_once './Dvd.php';
    include_once './Juego.php';
    // Clase Soporte
    class Soporte{

        const IVA  = 0.21;
        
        public function __construct(
            public string $titulo,
            protected int $numero,
            private float $precio
            ){}

        public function getNumero(): int{
            return $this->numero;
        }

        public function getPrecio(): float{
            return $this->precio;
        }

        public function getPrecioIva(): float{
            return $this->precio * (1 + self::IVA);
        }

        public function muestraResumen(): string{
            return $this->titulo . "<br>" . $this->getPrecio() . " €" . " (IVA no incluido)";
        }
    }

?>


