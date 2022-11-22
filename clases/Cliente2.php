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

        public function tieneAlquilado(Soporte $s): bool{
            //comprobamos si existe el soporte en el array de soportes alquilados
            return in_array($s, $this->soportesAlquilados);
        }

        public function alquilar(Soporte $s): bool{
            /* Debe comprobar si el soporte está alquilado y si no ha superado el cupo de alquileres. 
            Al alquilar, incrementará el numSoportesAlquilados y almacenará el soporte en el array. 
            Para cada caso debe mostrar un mensaje informando de lo ocurrido. */

            if($this->tieneAlquilado($s)){
                echo "<br>El soporte ya está alquilado";
                return false;
            }

            if($this->getNumSoportesAlquilados() >= $this->maxAlquilerConcurrente){
                echo "<br>El cliente ha superado el cupo de alquileres";
                return false;
            }


            $this->setSoportesAlquilados($s);
            $this->numSoportesAlquilados++;
            echo "<br>El soporte se ha alquilado correctamente";
            return true;
            

        }
    }
?>