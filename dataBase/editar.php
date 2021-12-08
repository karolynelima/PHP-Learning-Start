<?php
require 'config.php';
$info=[];//VARIAVEL QUE VAI CONTER AS INFORMAÇÕES DO USUARIO;
$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    
    $sql->bindValue(':id', $id);    
    $sql->execute();//SEMPRE TEM Q EXECUTAR

    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);//FOI UTILIZADO O FETCH SEM O ALL PARA NAO PRECISAR ENTRAR EM DOIS ARRAYS Q FICARIA ex: $info[0]['name'];
        
    }else{
        header("Location: index_crud.php");
        exit;
    }

}else{
    header("Location: index_crud.php");
    exit;
}
?>

<h1>Editar Usuário</h1>
<form method="GET" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$info['id'];?>" />      
    <label>
        Nome:<br/>
        <input  type="text" name="name" value= "<?=$info['nome'];?>" />
        
    </label><br/><br/>
    <label>
        E-mail:<br/>
        <input  type="email" name="email" value= "<?=$info['email'];?>"/>
                 
    </label><br/><br/>
    <input type="submit" value="Salvar">   
</form>