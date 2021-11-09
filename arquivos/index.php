<?php
    //LEITURA DE UM ARQUIVO INTERNO;
    $leitura = file_get_contents('text.txt');
    echo $leitura;
    echo "<hr/ >";

    //ESCREVER EM ARQUIVOS;
    $escrita = 'KAROLYNE LIMA';
    file_put_contents('nome.txt', $escrita);
    echo 'Arquivo criado com sucesso!';
    echo "<hr/ >";

    //EXCLUIR UM ARQUIVO;
    unlink('delete.txt');    
?>