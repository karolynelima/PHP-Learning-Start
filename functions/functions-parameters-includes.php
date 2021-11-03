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
echo "TOTAL :".$soma;



























































?>