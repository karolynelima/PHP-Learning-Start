<?php
require '../config.php';
require 'UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;//VARIAVEL QUE VAI CONTER AS INFORMAÇÕES DO USUARIO;

$id = filter_input(INPUT_GET, 'id');
if($id){
    $usuario = $usuarioDao->findById($id);
}
if($usuario === false){
    header("Location: index_dao.php");
    exit;
}

?>
<h1>Editar Usuário</h1>
<form method="POST" action="editar_dao_action.php">
    <input type="hidden" name="id" value="<?=$usuario->getId();?>" />      
    <label>
        Nome:<br/>
        <input  type="text" name="name" value= "<?=$usuario->getNome();?>" />
    </label><br/><br/>
    <label>
        E-mail:<br/>
        <input  type="email" name="email" value= "<?=$usuario->getEmail();?>"/>
    </label><br/><br/>
    <input type="submit" value="Salvar">   
</form>
