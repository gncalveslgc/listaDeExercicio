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
            $this->resulrado = $num1 * $num1;
            return $this -> resultado;
        }

        
        
    
    }//fim da classe
?>