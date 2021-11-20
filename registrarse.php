<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro</title>
</head>
<body>
    <div id="h">
    </div>
        <div class="fondo">
                <img src="img/fondo.jpg" alt="img1">
            </div>

    <section class="inicio">

            <div class="perga">

                <form method="post" action="registro.php" class="form">
                    <h1>Registrate!</h1>
                    <input type="text" name="user" placeholder="Usuario" >
                    <input type="text" name="pass" placeholder="Contraseña">
                    <input type="text" name="confirmP" placeholder="Confirmar Contraseña">
                    <input type="submit" value="Registrar" class="boton">
                    <a href="index.php">Volver</a>
                </form>
            </div> 


    </section>
    <script>
        
       // $("boton").click(function(){
  //$.ajax({url: "registro.php", success: function(result){ //nunca tiene que ir en un submit, pero tiene que nacer y morir en la misma pagina el ajax.
   // $("#h").html(result);
 // }});
//});
    </script>
</body>
</html>