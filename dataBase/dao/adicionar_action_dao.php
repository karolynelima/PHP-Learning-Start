<?php
/*
    - ESTABELECER CONEXÃO COM O BANCO;
    - PEGAR OS ITENS;
    - VERIFICAR SE EXISTEM, SE NÃO SE MANTER NA PÁGINA;
    
*/
require '../config.php';
require 'UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$name =  filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){

    if($usuarioDao->findByEmail($email) === false){
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);
        $novoUsuario->setEmail($email);

        $usuarioDao->add($novoUsuario);

        header("Location: index_dao.php");
        exit;
    }else{
        header("Location: adicionar_action_dao.php");
        exit;
    }
}else { 
    header("Location: adicionar_action_dao.php");
    exit;
}

?>