<!DOCTYPE html>
<html lang="pt-br">
    <body background="https://bit.ly/3AA7YWt">
    <head>
       <meta charset="utf-8">
       <meta name="description" content="Media do bimestre">
       <meta name="keywords" content="html,php">
       <meta name="robots" content="mediaaluno.php">
       <title>Maioridade</title>
    </head>
    <body>
        <header>
            <div align=center><h2>Média do Bimestre</h2></div>
        </header>
        <hr/>
        <main>
        <div align=center>
        
        <h4><u>Cálculo da média</u></h4>
        

        <font face=calibri>
<!--formulário-->
            <form action="mediaaluno.php" method="POST">
                <label>Insira a nota da primeira prova </label>
                <br><input type="text" name="nota1" required/>
            <br><br>
                <label>Insira a nota da segunda prova </label>
                <br><input type="text" name="nota2" required/>
            <br>
                <input type="submit" value="Enviar"/>
            </form>
            <br><br>
<!--php-->
            <?php  
                if(isset($_POST['nota1'])){
                    $nota1 = $_POST['nota1'];
                    $nota2 = $_POST['nota2'];
                    $media = ($nota1 + $nota2)/2;
                    if($media>=7){
                        echo "<p>Parabéns, sua média é $media, você foi aprovado!!</p>";
                    }
                    else {
                        echo "<p>Que pena, sua média é $media, você foi reprovado...</p>";
                    }
                }
                else {
                    echo "Preencha os campos acima";
                }
            ?>
        </font></div>
<br><br>
  

        <br><br>
        </main>
        <footer>
            <hr/>
            <div align=right><p>TDS06</p></div>
        </footer>

    </body>

</html>
