<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="deion" content="Aplicativo mostrar números">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="valorentredados2.php">
        <title>Mostrar Números</title>
    </head>
    <body>
        <header>
            <h1>Mostrar Números</h1>
            <hr/>
        </header>
        <main>
            <form action="valorentredados2.php" method="POST">
                <label>Digite o 1º número</label><br/>
                <input type="number" name="num1" required/><br/>
                <label>Digite o 2º número</label><br/>
                <input type="number" name="num2" required/><br/><br/>
                <input type="submit" value="Verificar"/>
            </form>
            <hr/>
            <?php
                if(isset($_POST['num1'])){
                    $numero1 = $_POST['num1'];
                    $numero2 = $_POST['num2'];
                    if($numero1 > $numero2){
                        $num1 = $numero2;
                        $num2 = $numero1;
                    } else {
                        $num1 = $numero1;
                        $num2 = $numero2;
                    }
                    for($i=$num1;$i<=$num2;$i++){
                            echo $i."<br/>";
                    }
                }
                else {
                    echo "";
                }
            ?>
        </main>
        <footer>
            <hr/>
            <p>Desenvolvido pelo Professor Emerson</p>
        </footer>
    </body>
</html>