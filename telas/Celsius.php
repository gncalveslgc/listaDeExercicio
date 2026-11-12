<?php
    namespace Projeto\Exercicios\telas;
    //PROTOCOLOS: GET E POST
    //GET = +RAPIDO / -SEGURO
    //POST = +LENTO / +SEGURO
    require_once("../funcoesPhp/funcoes.php"); //acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes; //acessando a classe
 
    $funcoes = new Funcoes(); //Criando um vinculo com a classe funcoes
    $resultado="";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impar ou par</title>
    <button><a href="../index.php">voltar</a></button>
</head>
<body>
   <h1>Informe o numero:</h1>
    <form method="POST">
        <label>Informe a seu numero:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
       
    
 
        <button type="submit">resultado
            <?php
           if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
              
               
                $resultado = $funcoes->celsiusnNumeros($num1);
            }
            ?>
        </button>
    </form>
 
    <?php
    echo "O reusltado é: " .$resultado;
    ?>
</body>
</html>