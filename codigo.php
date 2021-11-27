<script language= javascript type= text/javascript>
public funcNumeros(){

    alert("poronga");
 //   document.getElementById("rece").innerHTML='<'img src='"prueba.png"'>'
    
}
funcSimbolos(){
  

    alert("verga");
 //   document.getElementById("rece").innerHTML='<'img src='"prueba.png"'>'
}
</script>
<?php
$carta = random_int(1,56);
    function Invocar(){
        include "php/conexion.php";

        global $carta;
        $carta = random_int(1,56);

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

        include "php/conexion.php";
        global  $baraja;
        $baraja = array();
        global $counter;
        $counter = 0;
        global $decounter;
        $decounter = 40;
        while($counter < 40){
            $carta = 0;
            $carta = random_int(1,56);
            array_unshift($baraja,$carta);
            $counter = $counter + 1;
            $decounter = $decounter - 1;
        }
        echo reset($baraja);
        echo count($baraja);

    }

    function mostrarCarta(){

        include "php/conexion.php";
        $baraja = array();
        $counter = 0;
        $decounter = 40;
        while($counter < 40){
            $carta = 0;
            $carta = random_int(1,56);
            array_unshift($baraja,$carta);
            $counter = $counter + 1;
            $decounter = $decounter - 1;
        }

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
        echo reset($baraja);
    }
    
?>