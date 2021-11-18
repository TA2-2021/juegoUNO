<?php 
$cnn = mysqli_connect("Localhost", "root", "", "verga");

if($cnn->connect_error){
        die ("Ñery error de konetzion". $cnn->connect_error);
    }
    
$user = $_POST['user'];
$pwd = $_POST['pass'];
$pwdC = $_POST['confirmP'];

$sql = mysqli_query($cnn, "INSERT INTO usuario VALUES (idC, '$user', '$pwd', 0)");


?>