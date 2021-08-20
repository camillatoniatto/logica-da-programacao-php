<?php 
    $a = 10;
    $b = 10;
    if($a>$b){
        echo "A é maior que B";
        $b = $a;
        echo $b;
    }
    elseif($a==$b){
        echo "A é igual a B";
    }
    else{
        echo "B é maior que A";
    }    
?>