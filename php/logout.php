<?php
    include('conexion.php');
    session_start();

    if ($conn-> connect_error)
    {
        
    }


    session_destroy();
    header("Location: ../index.php");
?>