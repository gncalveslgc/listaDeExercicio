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
    <title>Verificar o seu saldo bancario </title>
    <h1>Verificar saldo:</h1>
    <button><a href="../index.php">voltar</a></button>
    <form method="POST">
        <label>Informe seu saldo bancario:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
      
       
    
 
        <button type="submit">resultado
            <?php
           if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                 

              
               $resultado = $funcoes->entradaBaladaNumero($num1);//utilizando o metodo da classe funcoes
                 
            }
            ?>
        </button>
    </form>
 
    <?php
    if(isset($_POST['primeiroNumero'])){
    echo $resultado;
    }else{
        echo "preencha os campos";
    }
    ?>
</head>
<body>
   
</body>