<?php
    //crie um array e salve 5 raças de cachorro
    //imprima a raça na posição 3
    //salve mais 5 raças no array
    //imprima a raça na posição 8

    $cao=array("pitbull","pinscher","dogue alemão","shihtzu","cocker");
    print_r($cao);
    echo "<br><br>";
    echo $cao[2];
    echo "<br>";
        $cao[]="daschund";
        $cao[]="beagle";
        $cao[]="pug";
        $cao[]="bulldogue frances";
        $cao[]="vira-lata";
    echo $cao[7];
    echo "<br><br>";
    print_r($cao);
?>