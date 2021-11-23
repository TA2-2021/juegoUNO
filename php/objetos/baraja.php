<?php

include('carta.php');

class Baraja{
    protected $idBaraja; //Una baraja por usuario
    protected $carta; //objeto carta
    protected $cantCartas; //Con esto llenaremos el arreglo de la baraja, maximo 50 cartas

    public function __construct($idBaraja, $carta, $cantCartas){
        $this-> idBaraja = $idBaraja;
        $this-> carta = $carta;
        $this-> cantCartas = $cantCartas;
    }
}

?>