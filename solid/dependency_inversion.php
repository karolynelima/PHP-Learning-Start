D - Dependency Inversion Principle (Principio da inversão de dependencia)
"Quando voce está fazendo uma Injenção de Dependencia e pode modificar qual 
dependencia esta sendo injentada dentro da classe, o ideal é criar uma interface 
para que todas as classes utilizem a mesma."

<?php
interface DBConnection{
    public function connect();
}

class MySQLConnection implements DBConnection{
    public function connect(){}
}

class OracleConnection implements DBConnection{
    public function connect(){}
}

class UsuarioDAO{    
    /*  DEIXA O USUARIODAO TOTALMENTE DEPENDENTE DA INSTANTIAÇÃO DE UMA NOVA CLASSE;
        SEMPRE SERÁ CRIADA UMA NOVA CONEXÃO COM O BANCO
    
    public function __construct()
    {
        $this->db = new MySQLConnection();
    }
    */

    private $db;
    //INJENÇÃO DE DEPENDENCIA; A INSTANCIA VAI DIRETO NO PARAMETRO CONSTRUTOR;
    public function __construct(DBConnection $dbCon){
        $this->db = $dbCon;
    }
    
}

$dbCon1 = new MySQLConnection($aux);
$dbCon2 = new OracleConnection($aux);
//UMA CONEXÃO PARA DUAS SITUAÇÕES, VIA INJEÇÃO DE DEPENDENCIA;
$usuarioDao = new UsuarioDAO($dbCon);
$usuarioDao2 = new UsuarioDAO($dbCon);