<?php
    declare(strict_types=1);
    include_once './Soporte.php';

    class Cliente{

        private array $soportesAlquilados;
        private int $numSoportesAlquilados;

        public function __construct(
            public string $nombre,
            private int $numero,
            private int $maxAlquilerConcurrente = 3,
        ){

            $this->soportesAlquilados = [];
            $this->numSoportesAlquilados = 0;
        }

        public function getNumero(): int{
            return $this->numero;
        }

        public function getNumSoportesAlquilados(): int{
            return count($this->soportesAlquilados);
        }

        public function setSoportesAlquilados(Soporte $soporte): ?Soporte{
            /* El array de soportes alquilados contedrá clases que hereden de Soporte */
            return $this->soportesAlquilados[] = $soporte;
        }

        public function muestraResumen(): void{
            echo "Cliente: " . $this->nombre . "<br>";
            echo "Cantidad Soportes alquilados: " . $this->getNumSoportesAlquilados() . "<br>";
        }
    }

?>