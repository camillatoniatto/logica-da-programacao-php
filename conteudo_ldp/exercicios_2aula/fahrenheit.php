<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="aplicativo fahrenheit para celcius">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="fahrenheit.php">
        <title>Converter ºF para ºC</title>
    </head>
   
    <body>       
    2) Faça um script que peça a temperatura em graus Fahrenheit, transforme e mostre a temperatura em graus Celsius.
    <hr/>             
    <!--formulario-->
                <form action="fahrenheit.php" method="POST">
                    <label>Insira uma temperatura em Fahrenheit:</label>
                    <input type="text" name="F" required/>
                
                <br><br>
                    <input type="submit" value="Enviar"/>
                </form>
                <hr/>
                
    <!--php-->  
                <?php  
                    if(isset($_POST['F'])){
                        $F = $_POST['F'];
                        $C = (5*($F-32)/9);
                        echo "<p><h4>A temperatura $F ºF é equivalente a ".number_format($C,2)." ºC</h4></p>";
                    }
                    else{
                        echo "";
                    }
                ?>
    </body>
</html>