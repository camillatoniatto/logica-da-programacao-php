<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="aplicativo consumo medio">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="combustivel.php">
        <title>Consumo médio</title>
    </head>
   
    <body>       
    1) Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de combustível.
    <hr/>             
    <!--formulario-->
                <form action="combustivel.php" method="POST">
                    <label>Insira quantos km você percorreu em seu trajeto:</label>
                    <input type="text" name="km" required/>
                <br><br>
                    <label>Insira quantos litros gastou durante essa viagem:</label>
                    <input type="text" name="litros" required/>
                <br><br>
                    <input type="submit" value="Enviar"/>
                </form>
                <hr/>
                
    <!--php-->  
                <?php  
                    if(isset($_POST['km'])){
                        $km = $_POST['km'];
                        $litros = $_POST['litros'];
                        $consumo = $km / $litros;
                        echo "<p><h4>Seu consumo médio foi de $consumo km/L nessa viagem.</h4></p>";
                    }
                    else{
                        echo "";
                    }
                ?>
    </body>
</html>