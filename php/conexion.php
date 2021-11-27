<?php
if(!defined('SERVIDORBD') AND !defined('USUARIOBD') AND !defined('PASSWORDBD') AND !defined('BD')) {
    
    DEFINE("SERVIDORBD", "localhost");
    DEFINE("USUARIOBD", "root");
    DEFINE("PASSWORDBD", "");
    DEFINE("BD", "parcial");
    
$conn = new mysqli(SERVIDORBD, USUARIOBD, PASSWORDBD, BD);
}

$conn = new mysqli(SERVIDORBD, USUARIOBD, PASSWORDBD, BD);
    
?>