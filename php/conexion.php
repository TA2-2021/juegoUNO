<?php
    DEFINE("SERVIDORBD", "localhost");
    DEFINE("USUARIOBD", "root");
    DEFINE("PASSWORDBD", "");
    DEFINE("BD", "uno");

    $conn = new mysqli(SERVIDORBD, USUARIOBD, PASSWORDBD, BD);
?>