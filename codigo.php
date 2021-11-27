<?php
$carta = random_int(1,60);
    function Invocar(){
        include "php/conexion.php";

        $carta = random_int(1,60);

        if ($carta <= 40){
            $sql1 = mysqli_query($conn, "SELECT carta.color, comun.numero FROM carta INNER JOIN comun ON carta.IdCarta = comun.idCarta WHERE carta.idCarta = $carta");
            $resultado1 = mysqli_fetch_array($sql1);
            
            $color = $resultado1['color'];
            $numerito = $resultado1['numero'];
            echo "<img id='cart' style='width: 99.9%; height: 99.9%; border-radius: 5%; cursor:move;' src='img/$color/$numerito.png' draggable='true'>";
        } 
        elseif ($carta >= 41) {
        $sql = mysqli_query($conn, "SELECT simbolo.simbolo, carta.color,carta.idCarta FROM simbolo INNER JOIN pertenece on simbolo.idSimbolo = pertenece.idSimbolo INNER JOIN carta ON pertenece.idCarta = carta.idCarta WHERE carta.idCarta = $carta");
            $resultado = mysqli_fetch_array($sql);
            $color = $resultado['color'];
            $simbolito = $resultado['simbolo'];
            echo "<img id='cart' style='width: 99.9%; height: 99.9%; border-radius: 5%; cursor:move;' src='img/$color/$simbolito.png' draggable='true'>";
        }

    }

    function cartasBaraja(){
        $baraja = array();
        $counter = 0;
        $decounter = 40;
        while($counter < 40){
            $carta = 0;
            $carta = random_int(1,60);
            array_unshift($baraja,$carta);
            unset($baraja[$decounter]);
            $counter = $counter + 1;
            $decounter = $decounter - 1;
            
        }
        echo end($baraja);
        echo count($baraja);
    }

?>