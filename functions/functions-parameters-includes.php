<?php

/*
FUNÇÃO QUE LISTA OS NÚMEROS DE 0 A 9
*/

function subsequente(){
    for($q=0;$q<10;$q++){
        echo $q."<br/>";
    }
    echo "<hr/>";
}
subsequente();

/*
FUNÇÃO DE SOMA
*/
function somar($n1, $n2){
    $total = $n1 + $n2;
    return $total;
}

$soma = somar(10, 5);
echo "TOTAL :".$soma.'<br/>';

$x = somar(1, 3);
$y = somar(5, 3);
$w = somar($x,$y);
echo $w.'<br/>';

/*
FUNÇÃO SOMAR COM PARAMETRO OPICIONAL
*/

function somarOpicional(int $n1, int $n2, int $n3 = 0){
    $total = $n1 + $n2 + $n3;
    return $total;
}

$a = somarOpicional(2, 3);
$b = somarOpicional(8, 3);
$c = somarOpicional($a,$b);
echo $c;

/*
FUNÇÃO PARA CONCATENAR DUAS PALAVRAS
*/

function somarPalavra($word1, $word2){
    $total = $word1.' '.$word2;
    return $total;
}

$result = somarPalavra('karol','lima');
echo '<br/>'.$result;

/*
FUNÇÃO QUE RECEBE COMO PARAMETRO A REFERENCIA DA VARIÁVEL
ALTERANDO SEU VALOR TANTO DENTRO COMO FORA DA FUNÇÃO
*/

function somarRef($n1, $n2, &$total){
    $total = $n1 + $n2;
}

$x      = 3;
$y      = 2;
$soma   = 0;

somarRef($x, $y, $soma);
echo "<br/>"."TOTAL :".$soma.'<br/>';

/*
FUNÇÕES ANONIMAS; FINALIZA COM ';' 
*/

$dizimo = function(int $valor){
    return $valor * 0.1;
};

$funcao = $dizimo;
echo $funcao(82).'<br/>';


/* CONSTRUÇÃO DA FUNÇÃO DENTRO DE UM PARAMETRO
algumafuncao(10, function(int $valor){
    return $valor * 0.1;
});
*/


/*
FUNÇÕES NATIVAS DE MATEMÁTICA
*/

//ABS(): NÚMERO ABSOLUTO/RETORNA O NÚMERO POSITIVO
$numero = -8.4;
echo abs($numero);

//PI()
echo '<br/>'.pi();

//FLOOR(): USADA PARA ARREDONDAR NÚMEROS DECIMAIS PARA BAIXO
$aux = 2.8123;
echo '<br/>'.floor($aux);

//CEIL(): USADA PARA ARREDONDAR NÚMEROS DECIMAIS PARA CIMA
echo '<br/>'.ceil($aux);

//ROUND(): ARREDONDA DEPENDENDO DO PROPRIO NÚMERO
echo '<br/>'.round($aux);

//ROUND( ,num): ARREDONDA COM CASAS DECIMAIS
echo '<br/>'.round($aux, 2);

//RAND(): GERA UM VALOR ALEATÓRIO DENTRO DE UM CERTO INTERVALO
$aleatorio = rand(3,9);
echo '<br/>'.$aleatorio;

//MAX(): IDENTIFICA O MAIOR NÚMERO DE UMA SEQUENCIA
$lista = [1, 4, 9, 8];

echo '<br/>'.max($lista);

//MIN(): IDENTIFICA O MENOR NÚMERO DE UMA SEQUENCIA
echo '<br/>'.min($lista);


/*
FUNÇÕES NATIVAS DE STRING
*/

//TRIM(): RETIRA OS ESPAÇOS VAZIOS DAS STRINGS
$nombreSujo = '     Karolyne Lima     ';
echo '<br/>'.$nombreSujo;
echo '<br/>'.trim($nombreSujo);

//STRLEN(): CONTA QUANTOS CARACTERES CONTEM A STRING
$nombreLimpo = trim($nombreSujo);
echo '<br/>'."NOME SUJO: ".strlen($nombreSujo);
echo '<br/>'."NOME LIMPO: ".strlen($nombreLimpo);

//STRTOLOWER(): DEIXA OS CARACTERES EM MINUSCULO
echo '<br/>'.strtolower($nombreSujo);

//STRTOUPPER(): DEIXA OS CARACTERES EM MAIUSCULO
echo '<br/>'.strtoupper($nombreSujo);

//STR_REPLACE('antigo','novo', $string): ALTERA UM(+) CARACTERE NA STRING
$nomeAlterado = str_replace('Lima', 'Martins', $nombreSujo);
echo '<br/>'.$nomeAlterado;

/*
SUB_SRT($string, inicio, qtd de chars): 
PEGA OS CARACTERES NO INTERVALO DEFINIDO
SE O SEGUNDO PARAMETRO FOR NEGATIVO A CONTAGEM COMEÇARA NO FINAL DA STRING
*/
$nomeCompleto = 'Karolyne Martins';
$intervalo = substr($nomeCompleto, 4, 4);
echo '<br/>'.$intervalo;

$intervaloReverso = substr($nomeCompleto, -4, 4);
echo '<br/>'.$intervaloReverso;

//STRPOS($string, char): INDICA A POSIÇÃO EM QUE O CARACTERE APARECE NA STRING
$posicao = strpos($nomeCompleto,'lyne');
echo '<br/>'.$posicao;

if($posicao > -1){ //VERIFICA SE O(s) CARACTERES EXISTEM NA STRING
    echo '<br/>'."ACHOU";
}else echo '<br/>'."NAO ACHOU";

//UCWORDS(): TRANSFORMA A PRIMEIRA LETRA DAS PALAVRAS EM MAIUSCULA
$palavra = 'karolyne martins rodrigues de lima';
echo '<br/>'.ucwords($palavra);

//EXPLODE('divisor', $string): SEPARA CADA PALAVRA DE UMA STRING EM UMA STRING NOVA
$nomes = explode(' ', $palavra);















































?>