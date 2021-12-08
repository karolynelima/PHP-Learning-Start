<?php
/*
    - ESTABELECER CONEXÃO COM O BANCO;
    - PEGAR OS ITENS;
    - VERIFICAR SE EXISTEM, SE NÃO SE MANTER NA PÁGINA;
    - PROCESSO DE ADIÇÃO: PDO STATEMENTE =  IR MONTANDO A QUERY AOS POUCOS
                                            E DEPOIS A EXECUTA;
    - PREPARE("SQL"): MÉTODO PARA PREPARAR A QUERY, ONDE É FEITA O SEU ESBOÇO;
    - BINDVALUE('quem vai ser modificado', $para o que vai ser modificado): 
        ASSOCIA VALORES, QUALQUER VALOR ENVIADO NA HORA SERÁ ACEITO
        NÃO É POSSÍVEL MUDAR POSTERIORMENTE;
    - BINDPARAM(mesmo a cima): ASSOCIA DIRETAMENTE NA VÁRIAVEL, O VALOR Q TIVER NA $VARIÁVEL SERÁ ENVIADO;
    - EXECUTE(): PARA EXECUTAR A QUERY;    
*/
require 'config.php';
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email){
    $sql = $pdo->prepare("UPDATE usuarios SET nome=:name, email=:email WHERE ID =:id");    
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();   

    header("Location: index_crud.php");
    exit;

}else { 
    header("Location: editar.php");
    exit;
}

?>