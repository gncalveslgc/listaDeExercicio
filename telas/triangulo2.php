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
    <title>verificando se o triangulo é Equilátero, Isósceles e Escaleno</title>
    <button><a href="../index.php">voltar</a></button>
</head>
<body>
    <h1>Informe os numeros:</h1>
    
    <form method="POST">
        <label>Informe o lado 1:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <label>Informe o lado 2:</label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <label>Informe o lado 3:</label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
      
       
    
 
        <button type="submit">resultado
            <?php
           if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                $num3 = $_POST['terceiroNumero'];
                
              
               $resultado = $funcoes->trianguloNumeros2($num1, $num2, $num3);//utilizando o
                
            }
            ?>
        </button>
    </form>
 
    <?php
    echo "O resultado é: " .$resultado;
    ?>
</body>
</html>