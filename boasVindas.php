<?php
    session_start();
    $nome = $_SESSION['nome'];
    echo "<h1>Boas-vindas $nome</h1>";
?>