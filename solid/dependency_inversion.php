D - Dependency Inversion Principle (Principio da inversão de dependencia)

<?php
class MySQLConnection{
    public function connect(){}
}

class UsuarioDAO{
    private $db;
    /*  DEIXA O USUARIODAO TOTALMENTE DEPENDENTE DA INSTANTIAÇÃO DE UMA NOVA CLASSE;
        SEMPRE SERÁ CRIADA UMA NOVA CONEXÃO COM O BANCO
    
    public function __construct()
    {
        $this->db = new MySQLConnection();
    }
    */


    //A INSTANCIA VAI DIRETO NO PARAMETRO CONSTRUTOR;
    public function __construct(MySQLConnection $dbCon){
        $this->db = $dbCon;
    }
    
}

$dbCon = new MySQLConnection(...);
//UMA CONEXÃO PARA DUAS SITUAÇÕES, VIA INJEÇÃO DE DEPENDENCIA;
$usuarioDao = new UsuarioDAO($dbCon);
$usuarioDao2 = new UsuarioDAO($dbCon);