<?php
session_start();
    try {
        $usuario = $_POST['user'];
        $clave = $_POST['pass'];
        $puntos = 0;

        //conexion
        $cnn = mysqli_connect("localhost", "root", "", "uno");
        //consulta
        $sql = mysqli_query($cnn, "SELECT user, clave, puntos FROM usuario WHERE user = '$usuario' AND clave = '$clave'");
        //ejecutar consulta
        $registro = mysqli_fetch_array($sql);

        //verificar que el resultado es distinto a NULL o FALSE
        if (isset($registro['user']) AND isset($registro['clave'])){
            $_SESSION['usuario'] = $registro['user'];
            $_SESSION['login'] = true;
            $_SESSION['puntos'] = $registro['puntos'];

            //Actualizar Estado del usuario
            /* UPDATE table_name
            SET column_name = value
            WHERE condition */
            $sql = mysqli_query($cnn, "UPDATE usuario SET estado = 'Conectado' WHERE user = '$usuario'");
            mysqli_close($cnn);
            $sql = "";
            $registro = "";
            header('location: ../menu.php');
        }else{
            mysqli_close($cnn);
            $sql = "";
            $registro = "";
            $_SESSION['login'] = false;
            header('location: ../index.php');
        }
        
    } catch (Exception $e) {
        echo "<script>alert('Error al conectar:". $e->getMessage()."')</script>";
        $sql = "";
        $registro = "";
        mysqli_close($cnn);
    }
?>