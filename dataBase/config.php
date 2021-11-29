<?php
/*
    - PDO("tipo do banco:dbname=nome;host=localhost","usuario","senha"): 
      BIBLIOTECA PARA CONECTAR COM BANCO DE DADOS;
*/

$db_name = 'test';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);


?>