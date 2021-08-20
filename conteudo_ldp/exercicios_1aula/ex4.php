<?php
//variaveis
    $valora = 1500;
    $porc = 15.00;
    $valord = $valora / 100 * $porc;
    $valorf = $valora - $valord;
        echo "<b>Preço do Produto:</b> R$ $valora,00";
        echo "<p><b>Desconto:</b> $porc%";
        echo "<p><b>Preço final:</b> R$ $valorf,00";
?>