<?php

    $cnn = mysqli_connect("Localhost", "root", "", "uno_bdd");

        if($cnn->connect_error){
            die ("Ñery error de konetzion". $cnn->connect_error);
        }

?>