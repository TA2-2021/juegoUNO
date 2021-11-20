<?php 
$result = '';
function registrarUsuario(){
    session_start();
    $cnn = mysqli_connect("Localhost", "root", "", "bolivia");

if($cnn->connect_error){
        die ("Ñery error de konetzion". $cnn->connect_error);
    }
    $user = $_POST['user'];
    $pwd = $_POST['pass'];
    $pwdC = $_POST['confirmP'];
    $_SESSION['user'] = $_POST['user'];
    $baba = $_SESSION['user'];
    $sql = mysqli_query($cnn, "INSERT INTO persona VALUES (idP, '$user', '$pwd', 0)");
    $mostrar = mysqli_query($cnn, "SELECT user FROM persona WHERE user = '$user'");
    $resultado = mysqli_fetch_array($mostrar);
    $result = "<h1><?phpsession_start();$baba?></h1>";
        }

registrarUsuario();

?>