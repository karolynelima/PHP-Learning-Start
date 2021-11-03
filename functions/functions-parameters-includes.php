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
FUNÇÕES ANONIMAS; FINALIZA COM ';' POR SER ANONIMA
*/

$dizimo = function(int $valor){
    return $valor * 0.1;
};

echo $dizimo(90);

















































?>