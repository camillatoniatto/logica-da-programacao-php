<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Intervalo entre dois numeros">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="intervalocontrario.php">
        <title>Exercício</title>
    </head>
    
    <!--Escreva um algoritmo em PHP que receba dois números (início e fim). 
    Se o número do início for menor que o fim, escreva os números do menor para o maior;
    caso contrário, do maior para o menor.-->

    <body>       
     <h2><center>∴(❁´◡`❁)∴</center></h2>
    <hr/>             
    <!--formulario-->
                <form action="intervalocontrario.php" method="POST">
                    <label>Insira valor 1</label>
                    <input type="number" name="valor1" required/><br>
                    <label>Insira valor 2</label>
                    <input type="number" name="valor2" required/>
                <br><br>
                    <input type="submit" value="Enviar"/>
                </form>
                <hr/>
                
    <!--php-->  
                <?php  
                    if(isset($_POST['valor1'])){
                        $valor1 = $_POST['valor1'];
                        $valor2 = $_POST['valor2'];
                        if($valor1<$valor2){                            
                            for($i=$valor1;$i<=$valor2;$i++){
                                echo "$i ";
                             } 
                        }
                        else{                      
                            for($i=$valor1;$i>=$valor2;$i--){                              
                                echo "$i ";
                            }
                         }
                    }
                ?>
    </body>
</html>