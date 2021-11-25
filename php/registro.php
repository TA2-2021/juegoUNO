<?php 
    try {
        $usuario = $_POST['user'];
        $clave = $_POST['pass'];
        $confClave = $_POST['confirmP'];

        $cnn = mysqli_connect("localhost", "root", "", "uno");

        $sql = mysqli_query($cnn, "SELECT user FROM usuario WHERE user = '$usuario'");
        $registro=mysqli_fetch_array($sql);

        if($clave != $confClave){
            echo "<script>alert('claves distintas, revise!')</script>";
        }else{        
            //verificar que el resultado es distinto a NULL o FALSE
            if(isset($registro['user'])){
                echo "<script>alert('El usuario ya existe')</script>";
                $sql = "";
                $registro = "";
                mysqli_close($cnn);
                header('location: ../index.php');
            }else{
                $sql = mysqli_query($cnn,"INSERT INTO usuario VALUES ('$usuario','$clave','Desconectado',0)");
                $registro = mysqli_fetch_array($sql);
                //verificar que el resultado es distinto a NULL o FALSE
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