<?php
//existem 2 tipos de declarar array:
//$array = array(1,2,3);
//$array = [1,2,3];

//exemplo array unidimencional
    $a=array(1,2,3,4);
    $b=[5,6,7,8];
    print_r($a);
    echo"<br>";
    print_r($b);
echo "<hr/>";   
    
//arrays associativos ou arrays nomeados
//dar nome ao índice e colocar o elemento
    $a=array(
        "chave1" => 1,
        "chave2" => "PHP",
        "chave3" => false,
    );
    print_r($a);
echo "<hr/>";

//arrays multidimencionais
//exemplo 1
    $a=array(
        array("Primeiro", "Segundo"), //posição 0
        array("Terceiro", "Quarto"), //posição 1
    );
    print_r($a);
    echo "<br><ol><li>";
    print_r($a[0]);
    echo "<br><li>";
    print_r($a[1]);
    echo "</li></ol>";
 echo "<hr/>";

//acessar valores dentro de arrays multidimencionais
//exemplo 1.2
    $a=array(
        array("Primeiro", "Segundo"), //posição 0
        array("Terceiro", "Quarto"), //posição 1
    );
    print_r($a);
    echo "<br><ol><li>";
    print_r($a[0][1]); //printar só "segundo"
    echo "<br><li>";
    print_r($a[1][0]); //printar só "terceiro"
    echo "</li></ol>";
 echo "<hr/>";
    
//contando os elementos de um array
    $numeros=[1,2,700,13,6,78,100,212,15,2,3,1000,412,6];
    print_r($numeros);
    echo "<br>";
    echo count($numeros); //função para contar os elementos
echo "<hr/>";

//adicionando um valor dinamicamente em um array
//só recebe um elemento de cada vez, para adicionar mais é necessario utilizar laço de repetição
    $cores=array();
    $cores[] = "Azul";
    $cores[] = "Vermelho";
    $cores[] = "Amarelo";
    print_r($cores);
echo "<hr/>";

//adicionando um valor dinamicamente em um array
    $arr=array("primeiro valor","segundo valor","terceiro valor");
    echo "Valor inicial da minha array é:<br>";
    print_r($arr);
    echo "<br><br>";
        $arr[]='quarto valor';
        $arr[]='quinto valor';
    echo "Agora a nossa array é:<br>";
    print_r($arr);
echo "<hr/>";

//acessando as posições de um ARRAY ASSOCIATIVO
    $cores=array(
        "chave1" => "Sim",
        "chave2" => "Não",
    );
    print_r($cores);
    echo "<br>";
    echo $cores["chave1"];
    //echo $cores[0] --> daria erro porque ele já associou com o nome chave1...
echo "<hr/>";
    
//acessando as posições de um ARRAY NORMAL 
    $oi=array(1,2,3,4,5);
    echo $oi[0];
    echo "<br>";
    echo $oi[2];
    echo "<br>";
    echo $oi[4];
echo "<hr/>";

//acessando as posições de um ARRAY ASSOCIATIVO 
    $arr=array("nome"=>"Rafael", "sobrenome"=>"Marques", "idade"=>"25");
    print_r($arr);
    echo "<br><br>";
    echo "Nome: <b>".$arr["nome"]."</b><br>";
    echo "Sobrenome: <b>".$arr["sobrenome"]."</b><br>";
    echo "Idade: <b>".$arr["idade"]."</b><br>";
echo "<hr/>";

//-------------------------------------------------------

//PERCORRENDO UM ARRAY
    //EXEMPLO 01
    $cores=array("azul", "vermelho", "amarelo", "verde");
    print_r($cores);
    echo "<br>";
    foreach($cores as $value){
        echo $value."<br>";
    }
echo "<hr/>";

    //EXEMPLO 02***********
    $funcionarios=array(
        array("nome"=>"Alex","idade"=>21,"salario"=>1285.27,"ativo"=>true),
        array("nome"=>"Emerson","idade"=>35,"salario"=>3885.27,"ativo"=>false),
        array("nome"=>"Osvaldo","idade"=>54,"salario"=>5285.27,"ativo"=>true),
    );
    $bonificacao=10;
    foreach($funcionarios as $funcionario){
        if($funcionario["ativo"]){
            $funcionario["salario"] += $funcionario["salario"] * ($bonificacao/100);
            echo "Funcionario: {$funcionario['nome']} - {$funcionario['salario']}<br>\n";
        }
        else{
            echo "Funcionario: {$funcionario['nome']} - INATIVO<br>\n";
        }
    }
echo "<hr/>";

?>