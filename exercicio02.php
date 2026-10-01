<?php
    $nome = $_POST ['nome'];
    $cidade = $_POST ['cidade'];

    echo "<h1>DADOS RECEBIDOS VIA MÉTODO POST</h1>";
    
    if ($cidade == "curitiba" || $cidade == "Curitiba"){
        echo "<p> Boas-vindas curitibano</p>";
    }else{
        echo "<p> Boas-vindas, $nome!</p>";
    }
    
?>