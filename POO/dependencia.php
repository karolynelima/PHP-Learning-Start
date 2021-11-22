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
        //USA O MÉTODO SOMAR DA CLASSE BÁSICO1 ou BÁSICO2
        return $this->basico->somar($x, $y);
    }

}
/*
INJEÇÃO DE DEPENDENCIA: INSERIR UM OBJETO DE FORA PARA DENTRO DA CLASSE, UMA "IMPORTAÇÃO";
*/
$basico = new Basico1();
$mat = new Matematica($basico);
echo $mat->somar(10, 15);


class Database{
    private $engine;

    public function __construct(DatabaseInterface $eng){
        $this->engine = $eng;
    }

    public function listarTudo(){
        return $this->engine->listar();
    }
}

class MysqlEngine implements DatabaseInterface {
    public function listar(){
        // ...
    }
}

class OracleEngine implements DatabaseInterface {
    public function listar(){
        // ...
    }
}

$db = new Database(new MysqlEngine());
$db->listarTudo();





?>