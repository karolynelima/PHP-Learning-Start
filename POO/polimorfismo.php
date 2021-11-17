<?php
class Quadrado{

}
class Circulo{

}


$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

$formas = [
    $quadrado,
    $circulo
];

foreach($formas as $formas){
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();
    echo "AREA: ".$tipo." : ".$area."<br/>";
}


?>