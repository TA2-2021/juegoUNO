<?php
session_start();
$cnn = mysqli_connect("Localhost", "root", "", "verga");

if($cnn->connect_error){
        die ("Ñery error de konetzion". $cnn->connect_error);
    }

$user = $_POST['user'];
$_SESSION['user'] = $_POST['user'];
$pwd = $_POST['pass'];

$sql = mysqli_query($cnn, "SELECT user FROM usuario WHERE user = '$user' AND pwd = '$pwd'");
$registro = mysqli_fetch_array($sql);

if($registro['user'] == $_POST['user']){
    $_SESSION['logeo'] = true;
    header('location: ../menu.php');

} else {header('location: ../index.php');}  

?>