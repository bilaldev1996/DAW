<?php

    declare(strict_types=1);
    include_once './Cliente.php';
    

    // Clase VideoClub
    class VideoClub{
        private array $productos;
        private array $socios;
        private int $numProductos;
        private int $numSocios;

        public function __construct(
            private string $nombre,
        ){
            $this->productos = [];
            $this->socios = [];
            $this->numProductos = 0;
            $this->numSocios = 0;
        }

        public function getNombre(): string{
            return $this->nombre;
        }

        public function getNumProductos(): int{
            return $this->numProductos;
        }

        public function getNumSocios(): int{
            return $this->numSocios;
        }

        private function incluirProducto(Soporte $producto): void{
            $this->productos[] = $producto;
        }

        public function incluirCintaVideo(string $titulo ,int $numero,float $precio, int $duracion): void{
            $cintaVideo = new CintaVideo($titulo, $numero ,$precio, $duracion);
            $this->incluirProducto($cintaVideo);
            $this->numProductos++;
        }

        public function incluirDvd(string $titulo, int $numero, float $precio, string $idiomas, string $pantalla): void{
            $dvd = new Dvd($titulo,$numero, $precio, $idiomas, $pantalla);
            $this->incluirProducto($dvd);
            $this->numProductos++;
        }

        public function incluirJuego(string $titulo,int $numero, float $precio, string $consola, int $minJ, int $maxJ){
            $juego = new Juego($titulo, $numero, $precio, $consola, $minJ, $maxJ);
            $this->incluirProducto($juego);
            $this->numProductos++;
        }

        public function incluirSocio(string $nombre,int $numero ,int $maxAlquileresConcurrentes = 3): void{
            $socio = new Cliente($nombre,$numero, $maxAlquileresConcurrentes);
            $this->socios[] = $socio;
            $this->numSocios++;
        }

        public function listarProductos(): void{
            /* listar productos */
            echo "<h2>Listado de productos del video club: " . $this->getNombre() . " </h2>  <br>";
            echo "<ul>";
            foreach($this->productos as $producto){
                echo "<li>" . $producto->muestraResumen() . "</li>";
                echo "<br>";
            }
            echo "</ul>";
        }

        public function listarSocios(): void{
            /* listar socios */
            echo "<h1>Listado de socios del video club: " . $this->getNombre() . " </h1>";
            foreach($this->socios as $socio){
                echo "<li>";
                echo $socio->muestraResumen();
                //echo $socio->listarAlquileres();//muestra los alquileres del socio
                echo "<br>";
                echo "</li>";
            }
        }

        public function alquilarSocioProducto(int $numeroCliente, int $numeroSoporte): void{
            /* comprobar si existe el cliente y el producto */
            if($numeroCliente > $this->numSocios){
                echo "<br><strong>El cliente no existe</strong>";
                return;
            }else if($numeroSoporte > $this->numProductos){
                echo "<br><strong>El Soporte no existe</strong>";
                return;
            }

            /* alquilar */
            $socio = $this->socios[$numeroCliente-1];
            $soporte = $this->productos[$numeroSoporte-1];
            $socio->alquilar($soporte);
        }
    }
?>