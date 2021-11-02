<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Bienvenidos</title>
</head>
<body> 

        <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Registrarse</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

    <section class="inicio">

            <div class="perga">

                <form method="post" action="" class="form">

                    <h1>Iniciar Sesion</h1>
                    <input type="text" name="user" placeholder="Usuario" > 
                    <input type="text" name="pass" placeholder="Contraseña">
                    <a href="menu.php">Confirmar</a>
                    <a href="registrarse.php">Registrarse</a>
                </form>
            </div> 
    </section>


</body>
</html>