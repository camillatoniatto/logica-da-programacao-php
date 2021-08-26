<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Media de notas e Conceito">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="media_conceito.php">
        <title>Par ou ímpar</title>
    </head>
   
    <body>       
    5 - Faça um script em PHP que lê as duas notas parciais obtidas por um aluno numa disciplina ao longo de um semestre, e calcule a sua média.
    <hr/>             
    <!--formulario-->
                <form action="media_conceito.php" method="POST">
                    <label>Primeira nota</label>
                    <input type="text" name="nota1" required/>
                    <label>Segunda nota</label>
                    <input type="text" name="nota2" required/>
                <br><br>
                    
                    <input type="submit" value="Enviar"/>
                </form>
                <hr/>
                
    <!--php-->  
                <?php  
                    if(isset($_POST['nota1'])){
                        $nota1 = $_POST['nota1'];
                        $nota2 = $_POST['nota2'];
                        $media=($nota1+$nota2)/2;

                        if ($media>=9.0 && $media<=10){
                            $conceito="A";
                            $situacao="Aprovado";
                        }
                        elseif ($media>=7.5 && $media<9.0){
                            $conceito="B";
                            $situacao="Aprovado";
                        }
                        elseif ($media>=6.0 && $media<7.5){
                            $conceito="C";
                            $situacao="Aprovado";
                        }
                        elseif ($media>=4.0 && $media<6.0){
                            $conceito="D";
                            $situacao="Reprovado";
                        }
                        elseif ($media>=0 && $media<4.0){
                            $conceito="E";
                            $situacao="Reprovado";
                        }
                        echo "<h4>Suas notas foram: $nota1 e $nota2</h4>";
                        echo "<h4>Ficou com $media de média</h4>";
                        echo "<h4>Conceito: $conceito</h4>";
                        echo "<h4>Situação final: $situacao!!</h4>";
                    }
                ?>
    </body>
</html>