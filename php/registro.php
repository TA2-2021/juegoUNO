<?php 
    include('conexion.php');
    $usuario = $_POST['user'];
    $clave = $_POST['pass'];

        if($conn->connect_error){
            die("Error al conectar: ". $conn->connect_error);
        }

        $sql = sprintf("SELECT username FROM usuario WHERE username = '%s'", mysqli_real_escape_string($conn, $usuario)); 
        $registro = $conn-> query($sql);
        $resultado = mysqli_fetch_array($registro);

        
        if(isset($resultado)){
            echo "<script>alert('Usuario ya existente')</script>";
        }else{
            if($_POST['pass'] <> $_POST['confirmP']){
                echo "<script>
                alert('Las claves no coinciden');
                window.location= '../registrarse.php';
                </script>";
            }else{
                $sql = sprintf("INSERT INTO usuario VALUES ('$usuario', '%s', 'Desconectado', 0)", mysqli_real_escape_string($conn, $clave));
                $registro = $conn-> query($sql);
                $_SESSION['login'] = "registrado";
                echo "<script>
                window.location= '../index.php';
                </script>";
            }
        }
?>