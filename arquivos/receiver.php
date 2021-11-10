<?php    
    /* ARRAY DO FILES
    Array
    (   CAMPO NAME NO INPUT TYPE="FILE":
        [arquivo] => Array
            (
                [name] => sdfnskjfds.jpeg : NOME ORIGINAL DO ARQUIVO;
                [type] => image/jpeg :  TIPO ORIGINAL DO ARQUIVO;
                [tmp_name] => C:\xampp\tmp\php9098.tmp : LOCAL TEMPORÁRIO DE ARMAZENAMENTO;
                [error] => 0 : ZERO SIGNIFICA QUE NÃO POSSUI ERRO;
                [size] => 122630 : TAMANHO DO ARQUIVO EM BITES;
            )
    )
    */
    /*
    MOVE_UPLOADED_FILE($_FILES['NOME DO CAMPO NAME']['LOCAL ATUAL DO ARQUIVO'], 'DESTINO'):
    MÉTODO UTILIZADO QUANDO O ARQUIVO É ACEITO E SE DESEJA SALVAR O MESMO.
    */
    echo'<pre>';
    print_r( $_FILES );                                 //MÉTODO PARA MOSTRAR OS DADOS DO ARQUIVO, COMO VISTO A CIMA;
    $nomeOriginal = $_FILES['arquivo']['name'];         //RECURSO UTILIZADO PARA GUARDAR O NOME ORIGINAL DO ARQUIVO;
    $permitidos = ['image/jpeg','image/jpg','image/png'];
    
    if(in_array($_FILES['arquivo']['type'], $permitidos)){
        $nomeRandom = md5(time().rand(0, 1000)).'.jpeg';    //RECURSO UTILIZADO PARA GERAR UM NOME RANDOMICO PARA O ARQUIVO;
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $nomeRandom);
        echo 'Arquivo salvo com sucesso!';
    } else{
        echo 'Arquivo não permitido!';
    }

    
?>