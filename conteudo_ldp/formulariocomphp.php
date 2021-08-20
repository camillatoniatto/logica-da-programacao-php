<!DOCTYPE html>
<html lang="pt-br">
    <body background="https://bit.ly/3AA7YWt">
    <head>
       <meta charset="utf-8">
       <meta name="description" content="Página de exemplo HTML com PHP">
       <meta name="keywords" content="html,php">
       <meta name="robots" content="index2.php">
       <title>HTML - PHP</title>
    </head>
    <body>
        <header>
            <div align=center><h1>HTML - PHP</h1></div>
        </header>

        <nav>
            <a href="index.php" title="Página Inicial">Home</a>
        </nav>

        <main>
            <div align=center><h2>Lógica da Programação</h2></div>
            <br><br> <u>Formulário</u>
            <br><br>

<!--formulário-->
            <form action="index2.php" method="POST">
                <label>Digite uma frase</label>
                <input type="text" name="frase" required/>
                <input type="submit" value="Mostrar"/>
            </form>
            <br>
<!--parte do php que vai mostrar o que foi escrito no formulário-->
            <?php  
                if(isset($_POST['frase'])){
                    $frase = $_POST['frase'];
                    echo $frase;
                }
                else{
                    echo "Preencha o campo acima";
                }
            ?>


                </div>
        <br><br>
        </main>
        <footer>
            <hr/>
            <div align=right><p>Professor Emerson</p></div>
        </footer>

    </body>

</html>
