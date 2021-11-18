<?php

    class Usuario{
        protected $nombre;
        protected $clave;
        protected $puntaje;

        public function __construct($nom, $clave){
            $this-> nombre = $nom;
            $this-> clave = $clave;
            $this-> puntaje = 0;
        }
        
    }
?>