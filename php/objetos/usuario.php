<?php

class Usuario{
    protected $usuario;
    protected $clave;
    protected $puntos;

    public function __construct($nombre, $clave){
        $this-> nombre = $nombre;
        $this-> clave = $clave;
        $this-> puntos = 0;
    }
}

    //Registro de usuario
    function login($usuario, $clave){
        session_start();
        $cnn = mysqli_connect("localhost", "root", "", "usuario");

        if($cnn-> connect_error){
            die ("Error al conectar". $cnn-> connect_error);
        }

        //Si se conecta...
        $sql = mysqli_query($cnn, "SELECT usuario FROM usuario WHERE user = '$usuario' AND clave = '$clave'");
        $registro = mysqli_fetch_array($sql);

        if($registro['user'] == $usuario){
            mysqli_close($cnn);
            $_SESSION['user'] = $usuario;
            $_SESSION['login'] = true;
            header('location: ../menu.php');
        }else{
            //Mostra mensaje de que los datos no coinciden
        }

    } 

    //Logeo de usuario
    function registro($nombre, $clave, $confClave){
        
    }

    //Mostrar usuario
    function mostrarUsuario(){
        
    }
?>