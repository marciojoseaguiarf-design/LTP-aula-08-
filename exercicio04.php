<?php
    session_start();
    $_SESSION['nome'] = $_POST['nome'];
    header("Location: boasVindas.php");
    exit;
?>