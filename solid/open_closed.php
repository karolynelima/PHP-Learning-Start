O - Open-closed Principle (Principio Aberto-Fechado)
"objetos, classes, entidades devem estar aberta para extensão mas fechadas para modificação."

<?php
class ContratoClt{
    public function calcularSalario(){}
}

class Estagio{
    public function bolsaAuxilio(){}
}

class FolhaDePagamento{
    public function calcular($funcionario){
        if($funcionario instanceof ContratoClt){
            $salario = $funcionario->calcularSalario();
        }elseif($funcionario instanceof Estagio){
            $salario = $funcionario->bolsaAuxilio();
        }

        return $salario;
    }
}


//APLICANDO O PRINCIPIO OPEN-CLOSED
interface Remuneravel{
    public function remuneracao();
}

class ContratoCltOC implements Remuneravel{
    public function remuneracao(){}
}

class EstagioOC implements Remuneravel{
    public function  remuneracao(){}
}

class ContratoPjOC implements Remuneravel{
    public function remuneracao(){}
}
//ESTA CLASSE NAO PRECISA SER ALTERADA SE TIVER QUE ADICIONAR UM NOVO TIPO DE CONTRATO
class FolhaDePagamentoOC{    
    public function calcular(Remuneravel $funcionario){
        return $funcionario->remuneracao();
    }
}
