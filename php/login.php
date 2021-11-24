<?php
session_start();
    try {
        $cnn = mysqli_connect("localhost", "root", "", "uno");

        $usuario = $_POST['user'];
        $clave = $_POST['pass'];

        $sql = mysqli_query($cnn, "SELECT user, pass FROM usuario WHERE user = '$user' AND pwd = '$pwd'");
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
        echo "Error: ". $e->getMessage();
        $sql = "";
        $registro = "";
        mysqli_close($cnn);
    }
?>