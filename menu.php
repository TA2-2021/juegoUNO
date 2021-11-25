<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Bienvenido</title>
</head>
<body>

            <div class="fondo">
                <img src="img/fondo.jpg" alt="img1">
            </div>

        <div class="d-flex align-items-start todo">

            <div class="contu">
                <div class="infou" id = "h">
                    <h1>
                    <?php
                        session_start();
                        echo $_SESSION['usuario'];
                        echo "<br>";
                        echo "Puntos: ". $_SESSION['puntos'];
                    ?>
                    </h1>
                    
                    <h2>
                    <?php
                        
                    ?>
                    </h2>
                </div>
            </div>

            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><h1 class="lal" >Historial</h1></a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tienda</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Jugar</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-personajes" aria-selected="false">Perfil</a>
                <a class="nav-link" href="index.php" >Cerrar Sesion</a>
            </div>

            <!--Contenido de las opciones-->
            <div class="tab-content" id="v-pills-tabContent">

                <!--Muestra historial-->
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
		            <div class="cont">
					<table class="table table-dark table-hover">
						<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Ganador</th>
							<th scope="col">Perdedor</th>
							<th scope="col">Handle</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td colspan="2">Larry the Bird</td>
							<td>@twitter</td>
						</tr>
						</tbody>
					</table>

                </div>
            </div>

        <!--termina-->

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
            </div>

        </div>

        <!-- Menu derecho jugadores conectados-->

        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Jugadores conectados
            </a>
            <?php
                try {
                    $cnn = mysqli_connect("localhost", "root", "", "uno");
                    $sql = mysqli_query($cnn, "SELECT user, estado FROM usuario ORDER BY estado ASC");
                    $aux = mysqli_fetch_array($sql);
                    $contador = 0;
                    if(isset($aux['user']) AND isset($aux['estado'])){

                        while($registro = mysqli_fetch_array($sql) and $contador <= 15){
                            echo '<a href="#" class="lol2 list-group-item" id="btn-abrir" >'. $registro['user'] .'-'. $registro['estado'] .'</a>';
                            $contador+=1;
                        }
                        
                    mysqli_close($cnn);
                    $sql = "";
                    $registro = "";
                    $aux = "";
                    }else{
                        echo "<script>alert('Error al mostrar usuarios:')</scrip>";
                        mysqli_close($cnn);
                        $sql = "";
                    }
                } catch (Exception $e) {
                    echo "<script>alert('Error al mostrar usuarios:')</scipt>";
                    mysqli_close($cnn);
                    $sql = "";
                }
            ?>
        </div>

        <div class="overlay" id="overlay">
		    <div class="popup" id="popup">

			<h1>¿Iniciar partida?</h1>
			<input type="submit" class="btn-lol" value="Si" onclick="enviarP()">
			<input type="submit" class="btn-cerrar" id="btn-cerrar" value="No">

		    </div>
	    </div>
    
    <script> function enviarP() { 
    location.href = "partida.php"; 
    }
    </script>
    <script src="app.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>