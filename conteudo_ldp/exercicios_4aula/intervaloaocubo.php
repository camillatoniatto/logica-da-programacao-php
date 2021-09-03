<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="valor entre dois numeros">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="intervaloaocubo.php">
        <title>Exercício</title>
    </head>
    
    <!--Elabore um programa em PHP que permita mostrar os números entre o intervalo do número
    digitado pelo usuário até o cubo do mesmo.-->

    <body>       
     <h2><center>∴(❁´◡`❁)∴</center></h2>
    <hr/>             
    <!--formulario-->
                <form action="intervaloaocubo.php" method="POST">
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
                            for($i=$valor1;$i<=$valor2**3;$i++){
                                echo "$i ";
                             } 
                        }
                        else{                      
                            for($i=$valor2;$i<=$valor1**3;$i++){                              
                                echo "$i ";
                            }
                         }
                    }
                ?>
    </body>
</html>