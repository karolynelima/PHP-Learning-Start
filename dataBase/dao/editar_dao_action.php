<?php
require '../config.php';
require 'UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


if($id && $name && $email){
    $usuario = $usuarioDao->findById($id);
    $usuario->setNome($name);
    $usuario->setEmail($email);
    $usuarioDao->update($usuario);   

    header("Location: index_dao.php");
    exit;

}else { 
    header("Location: editar_dao.php?id=".$id);
    exit;
}

?>