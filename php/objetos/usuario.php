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

    //Registro de usuario
    function login($usuario, $clave){
        try {
            session_start();
            $cnn = mysqli_connect("localhost", "root", "", "uno");

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
        } catch (Exception $e) {
        
        echo "<script>alert('Error al conectar: '". $e->getMessage() .")</script>";
        }
        

    } 

    //Logeo de usuario
    function registro($usuario, $clave, $confClave){
        //Si se conecta...
        try {
            
            $cnn = mysqli_connect("localhost", "root", "", "uno");
            $sql = mysqli_query($cnn, "SELECT usuario FROM usuario WHER user = '$usuario'");
            $registro = mysqli_fetch_array($sql);

             //Si hay coincidencia, ya existe el usuario
            if($registro['user'] == $usuario){
                //Mostrar mensaje de que ya existe el usuario
            }else{
                if($clave != $confClave){
                    echo "<script>alert('Claves distintas')</script>";
                }else{
                    try {
                        $sql = mysqli_query($cnn, "INSERT INTO usuario VALUES ('$usuario', '$clave', 0)");
                        header('location: ../index.html');
                
                    }catch (Exception $e) {
                        echo "<script>alert('Error al conectar: '". $e->getMessage() .")</script>";
                        }//Catch
                }
            }
                
        } catch (Exception $e) {
            echo "<script>alert('Error al conectar: '". $e->getMessage() .")</script>";
            }//Catch
    }

    //Mostrar usuario
    function mostrarUsuario(){
        
    }
}
?>