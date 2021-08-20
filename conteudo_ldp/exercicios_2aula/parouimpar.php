<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="aplicativo par ou impar">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="parouimpar.php">
        <title>Par ou ímpar</title>
    </head>
   
    <body>       
    3) Faça um site que peça um número inteiro e determine se ele é par ou ímpar. 
    <hr/>             
    <!--formulario-->
                <form action="parouimpar.php" method="POST">
                    <label>Insira um número inteiro</label>
                    <input type="text" name="numb" required/>
                <br><br>
                    
                    <input type="submit" value="Enviar"/>
                </form>
                <hr/>
                
    <!--php-->  
                <?php  
                    if(isset($_POST['numb'])){
                        $numb = $_POST['numb'];
                        $resto = $numb%2;
                        if ($resto == 0){
                            echo "<h4>Seu número é par</h4>";
                        }
                        else{
                            echo "<h4>Seu número é ímpar</h4>";
                        }
                    }
                ?>
    </body>
</html>