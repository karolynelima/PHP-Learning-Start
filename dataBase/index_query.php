<?php
/*
    - PDO("tipo do banco:dbname=nome;host=localhost","usuario","senha"): 
      BIBLIOTECA PARA CONECTAR COM BANCO DE DADOS;
    - QUERY('SQL'): CONSULTA AO BANCO DE DADOS;
    - FETCHALL():   MÉTODO PARA PEGAR TODOS OS DADOS;
    - FETCH_ASSOC:  CONSTANTE ESTÁTICA DO PDO/ EVITA A DUPLICIDADE DOS DADOS FAZENDO UMA ASSOCIAÇÃO ENTRE ELES;
    - ROWCOUNT():   CONTÁGEM DE LINHAS DA TABELA;
       
*/

$pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

$sql = $pdo->query('SELECT * FROM usuarios');

echo "TOTAL: ".$sql->rowCount();

$dados = $sql->fetchAll(PDO::FETCH_ASSOC); 

echo '<pre>';
print_r($dados);


?>