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
    <title>multiplicar</title>
    <h1>Informe os valores que deseja multiplicar:</h1>
    <form method="POST">
        <label>Informe o primeiro número:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
       
        <label>Informe o segundo número:</label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>
 
        <button type="submit">Subtrair
            <?php
           if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
               
                $resultado = $funcoes->multiplicarDoisNumeros($num1,$num2);//utilizando o metodo da classe funcoes
            }
            ?>
        </button>
    </form>
 
    <?php
    echo "O reusltado da subtrair é: " .$resultado;
    ?>
</head>
<body>
   
</body>
</html>