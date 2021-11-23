<?php

class Usuario{
    protected $usuario;
    protected $clave;
    protected $puntos;

    public function __construct($nombre, $clave, $puntos){
        $this-> nombre = $nombre;
        $this-> clave = $clave;
        $this-> puntos = $puntos;
    }
}

    //Registro de usuario
    function registrar($nombre, $clave, $puntos){

    } 

    //Logeo de usuario
    function login($nombre, $clave){
        
    }

?>