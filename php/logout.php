<?php
    include('conexion.php');
    session_start();
    $usuario = $_SESSION['usuario'];
    if ($conn-> connect_error){
        die ("Error al conectar: ". $conn-> connect_error);
    }

    $sql = "UPDATE usuario SET estado = 'Desconectado' WHERE username = '$usuario'";
    $registro = $conn-> query($sql);

    //!Borrar lo siguiente antes de enviar al Profe
    //*Es para verificar que la Sentencia se ejecuta correctamente
    if(isset($registro)){
        echo "<script>alert('Actualizado')</script>";
    }else{
        echo "<script>alert('No actualizado')</script>";    
    }

    session_destroy();
    header("Location: ../index.php");
?>