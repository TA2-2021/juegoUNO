<?php
session_start();
    try {
        $cnn = mysqli_connect("localhost", "root", "", "uno");

        $usuario = $_POST['user'];
        $clave = $_POST['pass'];

        mysqli_select_db($cnn,"uno");
        
        $sql = mysqli_query($cnn, "SELECT user, pass FROM usuario WHERE user = '$usuario' AND pwd = '$clave'");
        $registro = mysqli_fetch_array($sql);

        if ($registro['user'] == $usuario AND $registro['pass'] == $clave){
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