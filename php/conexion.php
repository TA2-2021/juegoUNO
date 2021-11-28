<?php
if(!DEFINED('SERVIDORBD') AND !DEFINED('USUARIOBD') AND !DEFINED('PASSWORDBD') AND !DEFINED('BD')) {
    
    DEFINE("SERVIDORBD", "localhost");
    DEFINE("USUARIOBD", "root");
    DEFINE("PASSWORDBD", "");
    DEFINE("BD", "parcial");
    
$conn = new mysqli(SERVIDORBD, USUARIOBD, PASSWORDBD, BD);
}

$conn = new mysqli(SERVIDORBD, USUARIOBD, PASSWORDBD, BD);
    
?>