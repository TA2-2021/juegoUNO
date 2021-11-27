<?php
function Invocar(){
    $cnn = mysqli_connect("localhost", "root", "", "bdProgra");
    $randomNumbers = Array(
        1 => 0,
        2 => 1,
        3 => 2,
        4 => 3,
        5 => 4,
        6 => 5,
        7 => 6,
        8 => 7,
        9 => 8,
        10 => 9,
        11 => "+2",
        12 => "Negar",
        13 => "CambiaColor",
        14 => "+4",
        15 => "ElegirColor"
    );
    $randomColors = array(
        1 => 'Verde',
        2 => 'Rojo',
        3 => 'Azul',
        4 => 'Amarillo',
        5 => 'Negro'
    );
    $user = $_SESSION['usuario'];
    //shuffle($randomNumbers);
    //shuffle ($randomColors);
    $random1 = random_int(1,15);
    $random2 = random_int(1,5);
    $sql = mysqli_query($cnn, "SELECT * FROM carta WHERE valor = '$randomNumbers[$random1]' and color = '$randomColors[$random2]'");
    $resultado = mysqli_fetch_array($sql);
    $color = $resultado['color'];
    $numerito = $resultado['valor'];
    $sql2 = mysqli_query($cnn, "SELECT Usuario.username, baraja.cantCartas FROM Usuario INNER JOIN baraja ON usuario.Baraja = Baraja.idBaraja WHERE username = '$user'");
    $consBar = mysqli_fetch_array($sql2);
//echo $consBar['username'].$consBar['cantCartas'];
if (isset($resultado)){
    if ($randomNumbers[1] or $randomNumbers[2] or $randomNumbers[3] or $randomNumbers[4] or $randomNumbers[5] or $randomNumbers[6] or $randomNumbers[7] or $randomNumbers[8] or $randomNumbers[9] or $randomNumbers[10] AND $randomColors[5] != $randomColors[5]){
    echo "<img class='cart' style='width: 99.9%; height: 99.9%; border-radius: 5%; cursor:move;' src='img/$color/$numerito.png' draggable='true'>";
    }
        elseif ($randomNumbers[11] AND $color != 'Negro'){
        echo "<img  class='cart' style='width: 99.5%; height: 99.5%; border-radius: 5%;' src='img/$color/+2.png' draggable='true' >";
    }
        elseif ($randomNumbers[12]){
        echo "<img class='cart' style='width: 99.5%; height: 99.5%; border-radius: 5%;' src='img/Negro/$numerito.png' draggable='true' >";
    }
        elseif ($randomNumbers[13] AND $color != 'Negro'){
        echo "<img class='cart' style='width: 99.5%; height: 99.5%; border-radius: 5%;' src='img/$color/colores.png' draggable='true' >";
    } 
        elseif ($randomNumbers[14] AND $color != 'Negro'){
        echo "<img class='cart' style='width: 99.5%; height: 99.5%; border-radius: 5%;' src='img/$color/Negar.png' draggable='true'>";
    } 
        elseif ($randomNumbers[15]){
        echo "<img class='cart' style='width: 99.5%; height: 99.5%; border-radius: 5%;' src='img/Negro/$numerito.png' draggable='true' >";
}

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