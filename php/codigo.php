<?php
    function Invocar(){
        include "php/conexion.php";

        $carta = random_int(1,64);

        if ($carta < 41){
            $sql1 = mysqli_query($conn, "SELECT carta.color, comun.numero FROM carta INNER JOIN comun ON carta.IdCarta = comun.idCarta WHERE carta.idCarta = $carta");
            $resultado1 = mysqli_fetch_array($sql1);
            echo $resultado1['color'].$resultado1['numero'];
        } 
        else {
        $sql = mysqli_query($conn, "SELECT simbolo.simbolo, carta.color FROM simbolo INNER JOIN pertenece on simbolo.idSimbolo = pertenece.idSimbolo INNER JOIN carta ON pertenece.idCarta = carta.idCarta WHERE carta.idCarta = $carta");
            $resultado = mysqli_fetch_array($sql);
            echo $resultado['simbolo'].$resultado['color'];
        }
    }
?>