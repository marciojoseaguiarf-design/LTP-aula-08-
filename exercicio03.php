<?php
    $num1 = (int)$_POST ['numero1'];
    $num2 = (int)$_POST ['numero2'];
    $soma = $num1 + $num2;

    print "<h1>SOMA DE DOIS NÚMEROS</h1><br>";
    print "<p>A soma dos dois números citados é: $soma</p>";

    print "<h4>DEBUG COM VAR_DUMP</h4>";
    var_dump ($num1, $num2);
?>