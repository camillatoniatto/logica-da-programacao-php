<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="tabuada">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="tabuada.php">
        <title>Exercício</title>
    </head>
    <body>       
     <h2><center>∴(❁´◡`❁)∴</center></h2>
    <hr/>
    <header>
    <h4>Tabuada</h4>
    </header>             
        <main>
        <!--formulario-->
            <form action="tabuada.php" method="POST">
                <label>Insira um valor</label>
                <input type="number" name="valor1" required/><br><br>
                <input type="submit" value="Enviar"/>
            </form>
            <hr/>             
        <!--php-->  
            <?php  
                if(isset($_POST['valor1'])){
                    $valor1 = $_POST['valor1'];
                    $i=0;
                    if($valor1>1 && $valor1<=10){
                        for($i=1;$i<=10;$i++){                            
                            $result=$valor1*$i;
                            echo $valor1.' * '.$i.' = '.$result."<br>";
                        }  
                    }
                    else{
                        echo "O valor inserido não está entre 1 e 10";
                    }
                }
            ?>

            <footer>
                <hr/>
                <p>TDS06 - 02/09/2021</p>
            </footer>
        </main>
    </body> 
</html>