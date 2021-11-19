<?php

class Basico1{
    public function somar($x, $y){
        return $x + $y;
    }
}

class Basico2{
    public function somar($x, $y){
        $res = $x;
        for($q=0;$q<$y;$q++){
            $res++;
        }
        return $res;
    }
}

class Matematica{
    private $basico;


    public function __construct(){
        $this->basico = new Basico1();
    }

    public function somar($x, $y){
        return $this->basico->somar($x, $y);
    }

}