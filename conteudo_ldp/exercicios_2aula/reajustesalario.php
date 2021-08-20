<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Reajuste de Salário">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="reajustesalario.php">
        <title>Par ou ímpar</title>
    </head>
   
    <body>       
    4) Faça um script que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual: 
    <hr/>             
    <!--formulario-->
                <form action="reajustesalario.php" method="POST">
                    <label>Insira seu salário</label>
                    <input type="text" name="salario" required/>
                <br><br>
                    
                    <input type="submit" value="Enviar"/>
                </form>
                <hr/>
                
    <!--php-->  
                <?php  
                    if(isset($_POST['salario'])){
                        $salario = $_POST['salario'];
                        if ($salario<=280){
                            $percentual = 20;
                            $aumento = $salario * $percentual/100;
                            $total = $salario + $aumento;
                        }
                        elseif ($salario>280 && $salario<=700){
                            $percentual = 15;
                            $aumento = $salario * $percentual/100;
                            $total = $salario + $aumento;
                        }
                        elseif ($salario>700 && $salario<=1500){
                            $percentual = 10;
                            $aumento = $salario * $percentual/100;
                            $total = $salario + $aumento;
                        }
                        elseif ($salario>1500){
                            $percentual = 5;
                            $aumento = $salario * $percentual/100;
                            $total = $salario + $aumento;
                        }
                        echo "<h4>Salário antes do reajuste: R$ $salario,00</h4>";
                        echo "<h4>Percentual de total aplicado: $percentual%</h4>";
                        echo "<h4>O valor do aumento: R$ $aumento</h4>";
                        echo "<h4>Novo salário após o total: R$ $total</h4>";
                    }
                ?>
    </body>
</html>