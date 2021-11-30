
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

$name =  filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){
    //VERIFICANDO SE EMAIL JÁ ESTÁ CADASTRADO
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0){
        //MODELO ONDE SERÁ FEITA A ASSOCIAÇÃO DOS DADOS
        $sql = $pdo->prepare("INSERT INTO usuarios(nome, email) VALUES (:name, :email)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->execute();
    
        header("Location: index_crud.php");
        exit;
    }else {
        header("Location: adicionar.php");
        exit;
    }
       

}else { 
    header("Location: adicionar.php");
    exit;
}

?>