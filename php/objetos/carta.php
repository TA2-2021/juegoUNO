<?php

class Carta{
    protected $idCarta;
    protected $numero;
    protected $simbolo;
    protected $color;

    public function __construct($id, $numero, $simbolo, $color){
        $this-> idCarta = $id;
        $this-> numero = $numero;
        $this-> sombolo = $simbolo;
        $this-> color = $color;
    }

    
    function tomar_carta_mazo(){
        /*Toma una carta del mazo
        el mazo es un arreglo de cartas (contiene las idCartas) desordenadas
        tomamos la primera posicion del arreglo y se lo daremos al arreglo
        que el usuario tiene en la mano de cartas para utilizar*/
    }
}

?>