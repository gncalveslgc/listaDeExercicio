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
    <title>bhaskara</title>
    <h1>Informe os valores da bhaskara:</h1>
    <form method="POST">
        <label>Informe o A:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
       
        <label>Informe o B:</label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe o C:</label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>
 
        <button type="submit">resultado
            <?php
           if(isset($_POST['primeiroNumero'])){
                $a = $_POST['primeiroNumero'];
                $b = $_POST['segundoNumero'];
                $c = $_POST['terceiroNumero'];
               
                $resultado = $funcoes->somarDoisNumeros($a,$b,$c);//utilizando o metodo da classe funcoes
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