<?php
interface Forma{
    public function getTipo();    
    public function getArea();
}

class Quadrado implements Forma{
    private $largura;
    private $altura;

    public function __construct($larg, $altu){
        $this->largura = $larg;
        $this->altura  = $altu;
    }    
    
    public function getTipo(){
        return 'quadrado';
    }
    public function getArea(){
        return ($this->largura * $this->altura);
    }
}

class Circulo{
    private $raio;

    public function __construct($rai){
        $this->raio = $rai;
    }
    public function getTipo(){
        return 'circulo';
    }
    public function getArea(){
        return pi() * ($this->raio * $this->raio);
    }

}

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

$formas = [
    $quadrado,
    $circulo
];
/*
POLIMORFISMO: VÁRIAS CLASSES DIFERENTES POSSUEM O MESMO METODO;
              DIZ RESPEITO À IMPLEMENTAÇÃO;  
*/
foreach($formas as $formas){
    $tipo = $formas->getTipo();
    $area = $formas->getArea();
    echo "AREA: ".$tipo." : ".$area."<br/>";
}
?>