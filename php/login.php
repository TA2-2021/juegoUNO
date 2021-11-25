<?php
include('conexion.php');
session_start();

        $usuario = $_POST['user'];
        $clave = $_POST['pass'];
        
        //validar conexion
        if($conn->connect_error){
            die("Conexion fallida: ". $conn->connect_error);
        }
        //consulta, sprintf toma un formato string y devuelve string, mysqli_real_escape_string "Filtra" los escapes que puedan perjudicar la conexion a la bdd, quedando vulnerables
        //ejemplo, si escriben sentencias SQL y pueden filtrarse en la pagina
        $sql = sprintf("SELECT username, clave, puntos FROM usuario WHERE username = '%s' AND clave = '%s'", mysqli_real_escape_string($conn, $usuario), mysqli_real_escape_string($conn, $clave));

        //ejecutar consulta
        $registro = $conn-> query($sql);

        //Guardar resultado
        $resultado = mysqli_fetch_array($registro);

        //Verificar que haya resultado
        if(isset($resultado)){
                $sql = "UPDATE usuario SET estado = 'Conectado' WHERE user = '$usuario'";
                $registro = $conn-> query($sql);

                $_SESSION['usuario'] = $usuario;
                $_SESSION['login'] = true;
                $_SESSION['puntos'] = $resultado['puntos'];
                header('location: ../menu.php');
        }else{
            echo "<script>
                alert('Usuario y/o clave incorrecto');
                window.location= '../index.php';
            </script>";
        }
?>