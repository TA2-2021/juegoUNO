<?php

function mostrarUsuarios(){

    session_start();
    $cnn = mysqli_connect("Localhost", "root", "", "verga");
    
    if($cnn->connect_error){
            die ("Ñery error de konetzion". $cnn->connect_error);
        }

}

?>