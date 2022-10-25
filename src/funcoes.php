<?php

namespace SRC;


class Funcoes
{

    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */

    public function SeculoAno(int $ano): int {
        return ceil($ano / 100);
    } 

	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {
        $confirma = false;
        while($confirma==false && $numero > 0){
            $numero--;
            if(PrimoMenor($numero)==1){
                $confirma=true;
            };           
        }
        return $numero;
    }
    function PrimoMenor($n)   {
        for($x=2; $x<$n; $x++)
        {
            if($n %$x ==0)
                {
                return 0;
                }
            }
        return 1;
    }


    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
        /* Cria Array */
        $todos = array();
        /* Percorre os valores do array e coloca no $todos */
        foreach($arr as $key=>$value){
            $todos[] = $value[''];
        }
        /* Ordena $todos */    
        rsort($todos);
        /* Retona o segundo valor */
        return $todos[1];
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    function verifica($arr, $n) {
        $count = 0;
        $index = -1;  
        for ($i = 1; $i < $n; $i++) {
            if ($arr[$i - 1] >= $arr[$i]) {  
                $count++;  
                $index = $i;
            }
        }
        
            if ($count > 1){
                return false;
            }  
            if ($count == 0){
                return true; 
            } 
            if ($index == $n - 1 || $index == 1){
                return true;  
            }
            if ($arr[$index - 1] < $arr[$index + 1]){
                return true;
            }
            if ($index - 2 >= 0 && $arr[$index - 2] < $arr[$index]){
                return true;
            }
            if($index < 0){
                return true;
            }  
        return false;
    }
	public function SequenciaCrescente(array $arr): boolean {
        $arr = sort($arr);
        $quantidade = count($arr);
        $sequencia = verifica($arr, $quantidade);
        return $sequencia;
    }
}
