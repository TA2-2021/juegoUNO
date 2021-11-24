<?php 
    try {
        $cnn = mysqli_connect("localhost", "root", "", "uno");

        $usuario = $_POST['user'];
        $clave = $_POST['pass'];
        $confClave = $_POST['confirmP'];

        $sql = mysqli_query($cnn, "SELECT user FROM usuario WHERE user = '$usuario'");
        $registro=mysqli_fetch_array($sql);

        if($clave != $confClave){
            echo "<script>alert('claves distintas, revise!')</script>";
        }else{        
            if(isset($registro['user'])){
                echo "<script>alert('El usuario ya existe')</script>";
                $sql = "";
                $registro = "";
                mysqli_close($cnn);
                header('location: ../registrarse.php');
            }else{
                $sql = mysqli_query($cnn,"INSERT INTO usuario VALUES ('$usuario','$clave',0)");
                $registro = mysqli_fetch_array($sql);

                if(isset($registro['user'])){
                    echo "<script>alert('Usuario creado correctamente')</script>";
                    $sql = "";
                    $registro = "";
                    mysqli_close($cnn);
                    header('location: ../login.php');
                }else{
                    echo "<script>alert('Error al crear el usuario')</script>";
                }
            }
        }
        
    } catch (Exception $e) {
        echo "Error: ". $e->getMessage();
        $sql = "";
        $registro = "";
        mysqli_close($cnn);
    }
?>