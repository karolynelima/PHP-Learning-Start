<?php
/*
COM MÉTODOS ESTÁTICOS NÃO É NECESSÁRIO CRIAR UM OBJETO PARA UTILIZAR AS
FUNÇÕES
*/
class Matematica{
    public static $nome = 'Karol';

    public static function somar($x, $y){
        return $x + $y;
    }
}
/*
SINTAXE PARA FUNÇÃO NÃO ESTÁTICA
$mat = new Matematica();
echo $mat->somar(10,20);
*/

//SINTAXE UTILIZADA PARA ACESSAR UM MÉTODO/PROPRIEDADE... ESTÁTICO CRIADO DENTRO DE UM CLASSE
echo Matematica::somar(20,30).'<br/>'.Matematica::$nome;
echo Matematica::$nome;


?>