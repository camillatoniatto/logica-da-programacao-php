<?php
    for($i=1;$i<5;$i++){ //for, com input de formulario
        echo "Nome ".$i." <input type='text' name='$i'\><br>";
    }
echo "<hr/>";
    $vetor=array(1,2,3,4,5); //for suave
    for($i=0;$i<5;$i++){
        $item=$vetor[$i];
        echo $item."<br>";
    }
echo "<hr/>";
    $vetor=array(1,2,3,4,5);
    foreach($vetor as $item){ //foreach, usado para array e objetos
        echo $item."</br>"; //a cada interação a variavel $item representa um [i] do $vetor
    }
echo "<hr/>";
    $cont=1;
    while($cont<10){ //while de buenas
        echo $cont."<br>";
        $cont++;
    }
echo "<hr/>";
    $cont=1;
    while($cont<=10): //while com endwhile
        echo $cont."<br>";
        $cont++;
    endwhile;
echo "<hr/>";
    $cont=1;
    do{ //do..while humilde
        echo $cont."<br>";
        $cont++;
    }while($cont<=10);
echo "<hr/>";
    $cont=0;
    while(true){ //utilização do break no while
        if($cont==5){
            break;
        }
        echo $cont."<br>";
        $cont++;
    }
echo "<hr/>";
?>