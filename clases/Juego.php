<?php
    include_once './Soporte.php';

    class Juego extends Soporte{
        
        public function __construct(
            $titulo,
            $numero,
            $precio,
            public string $consola,
            private int $minNumJuagadores,
            private int $maxNumJuagadores,
            ){
            parent::__construct($titulo, $numero, $precio);
            }

            public function muestraJugadoresPosibles(): string{
                /*  el cual debe mostrar "Para un jugador", "Para x jugadores" o "De X a Y jugadores"  */
                if($this->minNumJuagadores == 1 && $this->maxNumJuagadores == 1){
                    return "Para un jugador";
                }else if($this->minNumJuagadores == $this->maxNumJuagadores){
                    return "Para " . $this->minNumJuagadores . " jugadores";
                }else{
                    return "De " . $this->minNumJuagadores . " a " . $this->maxNumJuagadores . " jugadores";
                }
            }

            public function muestraResumen(): string{
                return parent::muestraResumen() . "<br> Consola: " . $this->consola . "<br>" . $this->muestraJugadoresPosibles();
            }
    }
?>