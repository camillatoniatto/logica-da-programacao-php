<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Desconto e valor final">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="desconto.php">
        <title>Exercício</title>
    </head>
    
    <!--Escreva um programa que receba o preço de dois produtos.
    Calcule um desconto de 8% no primeiro produto, 11% no segundo e apresente o valor final a ser pago.-->

    <body>       
     <h2><center>∴(❁´◡`❁)∴</center></h2>
    <hr/>             
    <!--formulario-->
                <form action="desconto.php" method="POST">
                    <label>Preço do primeiro produto</label>
                    <input type="number" name="p1" required/><br>
                    <label>Preço do segundo produto</label>
                    <input type="number" name="p2" required/>
                <br><br>
                    <input type="submit" value="Enviar"/>
                </form>
                <hr/>
                
    <!--php-->  
                <?php  
                    if(isset($_POST['p1'])){
                        $p1 = $_POST['p1'];
                        $p2 = $_POST['p2'];
                        $desconto1=$p1*8/100;
                        $desconto2=$p2*11/100;
                        $final = ($p1+$p2)-($desconto1+$desconto2);
                        echo "Desconto do primeiro produto: $desconto1<br>";
                        echo "Desconto do segundo produto: $desconto2<br>";
                        echo "Valor total a ser pago: R$ $final";
                    }
                ?>
    </body>
</html>