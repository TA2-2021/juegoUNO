<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
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
								<img style='width: 99.5%; height: 99.5%; border-radius: 5%; ' src="img/revez.jpg" alt="">
		            			</div>	
		            			<div class="carta1">
								<img style='width: 99.5%; height: 99.5%; border-radius: 5%;' src="img/revez.jpg" alt="">
		            			</div>	
		            			<div class="carta1">
								<img style='width: 99.5%; height: 99.5%; border-radius: 5%;' src="img/revez.jpg" alt="">
		            			</div>	
		            			<div class="carta1">
								<img style='width: 99.5%; height: 99.5%; border-radius: 5%;' src="img/revez.jpg" alt="">
		            			</div>	
		            			
		            		</div>		
		            	
		            </div>

					<div class="botonT">

						<input type="submit" class="botonT1" value="Tirar carta">

					</div>

		            <div class="contM">

		            	<div class="mazoD" id="rece" ondrop='dropHandler(event);' ondragover='dragOverHandler(event);'>
		            		
		            	</div>

		            	<div class="mazo">
						<img style='width: 99.5%; height: 99.5%; border-radius: 5%;' src="img/revez.jpg" alt="">
		            	</div>
		            	
		            </div>

		            <div class="contU">

		            		<div class="cartasU">

								<div class="carta1" id="draggable">
								<?php
								session_start();
								include 'codigo.php';
								Invocar();
								?>
		            			</div>

		            			<div class="carta1">
								<?php
								
								Invocar();
								?>
		            			</div>	

		            			<div class="carta1">
								<?php
								
								Invocar();
								?>
		            			</div>	
								<div class="carta1">
								<?php
								Invocar();
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
	<script>
  $( function() {
    $( "#draggable" ).draggable();
  } );
  </script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  	<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

</body>
</html>