<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes
    {
        private float $num1;
        private float $num2;
        private float $resultado;
        private float $num3;
       

    
        //Construtor = intancia  as variaveis -> Criar as variaveis na memoria do servidor

        public function __construct(){
            $this->num1       = 0;
            $this->num2       = 0;
            $this->resultado  = 0;
        }//fim do construtor

        //Métodos de acesso e modificadores
        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this-> variavel = $novoDado;
        }//fim do set
     
            public function somarDoisNumeros(float $num1, float $num2)
        {
            $this -> resultado = $num1 + $num2;
            return $this->resultado;
        }//fim do método
    
         
        
            public function subtrairDoisNumeros(float $num1, float $num2)
        {
            $this -> resultado = $num1 - $num2;
            return $this -> resultado;
        }//fim do método

        
        
            public function multiplicarDoisNumeros(float $num1, float $num2)
        {
            $this -> resultado = $num1 * $num2;
            return $this -> resultado;
        }//fim do método

         
        
            public function dividirDoisNumeros(float $num1, float $num2){
                if($num2 <=2){
                    return "impossivel dividir por 0";
                }
                else{
                    $this->resultado = $num1 / $num2;
                    return $this->resultado;
                }
            }//fim do método
            
            public function delta(int $a, int $b, int $c){
                $delta = pow ($b,2)-4*$a*$c;
                return delta;
            }//fim do delta
        
            public function calcularX1X2(int $a, int $b, int $c){
                $del = $this ->delta($a,$b,$c);
                if($del <0){
                    return "Impossivel calcular X1 E X2, delta negativo";
                }else{
                    $x1 = (-$b + sqrt($delta($a,$b,$c)))/2*$a;
                    $x1 = (-$b - sqrt($delta($a,$b,$c)))/2*$a;
                    return "x1 = $x1 <br> <br> x2 = $x2";
                }
            }


            public function multiplicadorDoisNumeros(float $num1)
        {
            $this -> resultado = $num1 * 2;
            return $this -> resultado;
        }//fim do método
            
         public function mediaNumeros(float $num1, float $num2, float $num3)
        {
            $this -> resultado = $num1 + $num2 + $num3 / 3;
            return $this->resultado;
        }//fim do método
        
        public function raiznumeros(int $num1){
            $this->resultado = ($num1) * $num1;
            return $this -> resultado;
        }

        public function circuloNumeros(float $num1)
        {
            $this->resultado = ($num1**2) * 3.14 ;
            return $this->resultado;
        }
        public function trianguloNumeros (float $num1, float $num2)
        {
            $this->resultado = ($num1 * $num2 ) / 2;
            return $this->resultado;
        }
        public function idadeMorrerNumero (float $num1)
        {
           $this->resultado = (-$num1) + 100;
            return $this->resultado;
        }
        public function descontoNumero (float $num1)
        {
            $this->resultado = ($num1) * 0.9 ;
            return $this -> resultado;
        }
        public function impostoNumero (float $num1)
        {
            $this->resultado = ($num1) * 0.18 + $num1 ;
            return $this  -> resultado;    
        }

        public function metrosNumeros (float $num1)
        {
            $this->resultado = ($num1) * 100;
            return $this -> resultado;
        }
        public function  anosNumero (int $num1)
        {
            $this->resultado = ($num1) * 12;
            return $this -> resultado;
        }
        public function celsiusnNumeros(float $num1)
        {
            $this -> resultado = ($num1 /9/5) + 32;
            return $this -> resultado;
        }

        public function tabuada(float $num1){
            $msg = "";
            for ($i = 0;$i <= 10;$i++){
                $msg .= "<br> $num * $i =" .($num1 * $i);
            }//fim do for
            return $msg;
        }//fim do metodo

        public function decimalBinario(float $decimal)
        {
            $msg = "";
            $resultado = "";
            while($decimal / 2 != 0)
                {
                    $resultado .= " ".($decimal % 2);//coletando o resto da divisão
                    $decimal = (int)$decimal/2;//contribuir para o criterio de parada
                }//fim do while
                return strrev($resultado);//mostrando da direita para esquerda 
        }//fim do decimal

        public function decimalHexadecimal(float $decimal)
        {
            $resultado = "";
            while($decimal / 16 != 0){
                $resto = $decimal % 16;
                switch($resto){
                    case 10:
                        $resultado .= "A";
                        break;
                    case 11;
                        $resultado .= "B";
                        break;
                    case 12;
                        $resultado .= "C";
                        break;
                    case 13;
                        $resultado .= "D";
                        break;
                    case 14;
                        $resultado .= "E";
                        break;
                    case 15;
                        $resultado .= "F";
                        break;
                    default:
                        $resultado .= $resto;
                }
                return strrev($resultado);
            }
        }//fim do hexa

        public function cadastroProduto(string $produto){
            $senhaBD = 123;
            do{
                if($senha != $senhaBD){
                    $msg = "Erro, Digite novamente!";
                }else{
                    $msg = "Bem-vindo!";
                }
            }while($senhaBD != $senha);
            return $msg;
        }//fim do cadastro

        public function negativoPositivo(float $num1)
        {
            if($num1 > 0){
                return "Positivo";
            }
            else if($num1 == 0){
                return "Zero";
            }
            else{
                return "Negativo";
            }
        }
        public function maiorMenor (float $num1, float $num2)
        {
            if ($num1 > $num2){
                return "O numero: ". $num1 . "é maior";
            }
            else if ($num1 < $num2){
                return "O numero: ". $num2 . "é maior";
            }
        }
    
    }//fim da classe
?>