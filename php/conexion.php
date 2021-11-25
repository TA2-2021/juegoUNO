<?php
    DEFINE("SERVIDORBD", "localhost");
    DEFINE("USUARIOBD", "root");
    DEFINE("PASSWORDBD", "");
    DEFINE("BD", "bdprogra");

    $conn = new mysqli(SERVIDORBD, USUARIOBD, PASSWORDBD, BD);
?>