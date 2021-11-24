<?php
session_start();
    try {
        $usuario = $_POST['user'];
        $clave = $_POST['pass'];

        //conexion
        $cnn = mysqli_connect("localhost", "root", "", "uno");
        //consulta
        $sql = mysqli_query($cnn, "SELECT user, clave FROM usuario WHERE user = '$usuario' AND pwd = '$clave'");
        //ejecutar consulta
        $registro = mysqli_fetch_array($sql);

        //verificar que el resultado es distinto a NULL o FALSE
        if (isset($registro['user']) AND isset($registro['clave'])){
            $_SESSION['usuario'] = $usuario;
            $_SESSION['login'] = true;
            header('location: ../menu.php');
        }else{
            echo "<script>alert('Usuario y/o clave incorrectas');</script>";
            mysqli_close($cnn);
            $sql = "";
            $registro = "";
            header('location: /index.php');
        }
        
    } catch (Exception $e) {
        echo "<script>alert('Error al conectar:". $e->getMessage()."')</script>";
        $sql = "";
        $registro = "";
        mysqli_close($cnn);
    }
?>