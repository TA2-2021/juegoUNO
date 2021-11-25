<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
	<title>bienvenidos</title>
</head>
<body>

	<div class="fondo">
                <img src="img/fondo.jpg" alt="img1">
            </div>
        <div class="d-flex align-items-start todo">
            <div class="nav flex-column nav-pills me-3 lol3" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><h1 class="lal" >Uno</h1></a>
                <a class="nav-link" href="menu.php" >Salir</a>
            </div>
            <!--Contenido de las opciones-->
            <div class="tab-content" id="v-pills-tabContent">
                <!--Muestra historial-->
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
		            	
		        	<div class="contE">

		            		<div class="cartasE">
		            				
		            			<div class="carta1">
		            				
		            			</div>	
		            			<div class="carta1">
		            				
		            			</div>	
		            			<div class="carta1">
		            				
		            			</div>	
		            			<div class="carta1">
		            				
		            			</div>	
		            			
		            		</div>		
		            	
		            </div>

		            <div class="contM">

		            	<div class="mazoD">
		            		
		            	</div>

		            	<div class="mazo">
		            		
		            	</div>
		            	
		            </div>

		            <div class="contU">


		            		<div class="cartasU">
		        								
		            			<div class="carta1">
								<?php

								session_start();
								//conexion
								$cnn = mysqli_connect("localhost", "root", "", "bdProgra");
								//consulta
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
									12 => "+4",
									13 => "CambiaColor",
									14 => "Negar",
									15 => "ElegirColor"
								);
								$randomColors = array(
									1 => 'Verde',
									2 => 'Rojo',
									3 => 'Azul',
									4 => 'Amarillo',
									5 => 'Negro'
								);
								shuffle($randomNumbers);
								shuffle ($randomColors);

								$seleccion = array_rand($randomColors,4);

								$numeroSelect = array_rand($randomNumbers,15);
								$random1 = random_int(1,10);
								$random2 = random_int(1,4);
								$sql = mysqli_query($cnn, "SELECT * FROM carta WHERE valor = '$randomNumbers[$random1]' and color = '$randomColors[$random2]'");
								$resultado = mysqli_fetch_array($sql);
								$color = $resultado['color'];
								$numerito = $resultado['valor'];

								if (isset($resultado)){
									if ($randomNumbers[1] or $randomNumbers[2] or $randomNumbers[3] or $randomNumbers[4] or $randomNumbers[5] or $randomNumbers[6] or $randomNumbers[7] or $randomNumbers[8] or $randomNumbers[9] or $randomNumbers[10] AND $randomColors[5] != $randomColors[5]){
									echo "<img src='img/$color/$numerito.png'>";
									}
										elseif ($randomNumbers[11] AND $color != 'Negro'){
										echo "<img src='img/$color/+2.png'>";
									}
									 	elseif ($randomNumbers[12]){
										echo "<img src='img/Negro/$numerito.png'>";
									}
										elseif ($randomNumbers[13] AND $color != 'Negro'){
										echo "<img src='img/$color/colores.png'>";
									} 
										elseif ($randomNumbers[14] AND $color != 'Negro'){
										echo "<img src='img/$color/Negar.png'>";
									} 
										elseif ($randomNumbers[15]){
										echo "<img src='img/Negro/$numerito.png'>";
								}
								
							}elseif ($randomNumbers[12]) {

								echo "<img src='img/Negro/+4.png'>";
							} else echo "<img src='img/$color/colores.png'>";
								//print "<img src=\"img\$resultado['color']\$resultado['numero'].png\">"
								?>
		            			</div>

		            			<div class="carta1">
								<?php

			
								//conexion
								$cnn = mysqli_connect("localhost", "root", "", "bdProgra");
								//consulta
								$randomNumbers = range(0,9);
								$randomColors = array(
									0 => 'Verde',
									1 => 'Rojo',
									2 => 'Azul',
									3 => 'Amarillo'
								);
								shuffle($randomNumbers);
								shuffle ($randomColors);
								$sql = mysqli_query($cnn, "SELECT numero,color FROM carta WHERE numero = '$randomNumbers[1]' AND color = '$randomColors[0]'");
								$resultado = mysqli_fetch_array($sql);
								echo $resultado['numero'].$resultado['color'];
								?>
		            			</div>	

		            			<div class="carta1">
								<?php

			
								//conexion
								$cnn = mysqli_connect("localhost", "root", "", "bdProgra");
								//consulta
								$randomNumbers = range(0,9);
								$randomColors = array(
									0 => 'Verde',
									1 => 'Rojo',
									2 => 'Azul',
									3 => 'Amarillo'
								);
								shuffle($randomNumbers);
								shuffle ($randomColors);
								$sql = mysqli_query($cnn, "SELECT numero,color FROM carta WHERE numero = '$randomNumbers[1]' AND color = '$randomColors[0]'");
								$resultado = mysqli_fetch_array($sql);
								echo $resultado['numero'].$resultado['color'];
								?>
		            			</div>	

		            			<div class="carta1">
								<?php
								//conexion
								$cnn = mysqli_connect("localhost", "root", "", "bdProgra");
								//consulta
								$randomNumbers = range(0,9);
								$randomColors = array(
									0 => 'Verde',
									1 => 'Rojo',
									2 => 'Azul',
									3 => 'Amarillo'
								);
								shuffle($randomNumbers);
								shuffle ($randomColors);
								$sql = mysqli_query($cnn, "SELECT numero,color FROM carta WHERE numero = '$randomNumbers[1]' AND color = '$randomColors[0]'");
								$resultado = mysqli_fetch_array($sql);
								echo $resultado['numero'].$resultado['color'];
								?>
		            			</div>	
		            			
		            		</div>	
		            	
		            </div>




            </div>
        <!--termina-->
            </div>
        </div>
        <!-- Menu derecho jugadores conectados-->
        <!--<div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Jugadores conectados
            </a>
            <a href="#" class="list-group-item list-group-item-action">A second link item</a>
            <a href="#" class="list-group-item list-group-item-action">A third link item</a>
            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
            <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
        </div> -->
    
    <script src="app.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>