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
    <title>Idade para meses</title>
   <button><a href="../index.php">voltar</a></button>
</head>
<body>
    <h1>Informe a sua idade :</h1>
    <form method="POST">
        <label>Informe a sua idade:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
       
    
 
        <button type="submit">resultado
            <?php
           if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
              
               
                $resultado = $funcoes->idadeMorrerNumero($num1);//utilizando o metodo da classe funcoes
            }
            ?>
        </button>
    </form>
 
    <?php
    echo "O reusltado da subtrair é: " .$resultado;
    ?>
</body>
</html>