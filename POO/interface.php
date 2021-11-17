
<?php
/*
INTERFACE:  GUIA DE IMPLEMENTAÇÃO DE UMA CLASSE
            PADRONIZAÇÃO
*/

interface Database{
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
}

class MysqlDB implements Database{

    public function listarProdutos(){

    }
    public function adicionarProduto(){
        echo "adicionando com mysql";
    }
    public function alterarProduto(){

    }

}

class OracleDB implements Database{

    public function listarProdutos(){

    }
    public function adicionarProduto(){
        echo "adicionando com oracle";
    }
    public function alterarProduto(){

    }

}

$db = new OracleDB();
$db->adicionarProduto();

?>