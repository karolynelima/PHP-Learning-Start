<?php
    /*
    FILE_GET_CONTENTS('path to file'): MÉTODO PARA LEITURA DE UM ARQUIVO O TRANSFORMANDO EM STRING;
    */
    $leitura = file_get_contents('text.txt');
    echo $leitura;
    echo "<hr/ >";

    /*
    FILE_PUT_CONTENTS('path to file', $string): MÉTODO PARA ESCRITA EM UM ARQUIVO;
    */
    $escrita = 'KAROLYNE LIMA';
    file_put_contents('nome.txt', $escrita);
    echo 'Arquivo criado com sucesso!';
    echo "<hr/ >";

    /*
    UNLINK('path to file'): MÉTODO PARA EXCLUSÃO DE UM ARQUIVO;
    unlink('delete.txt');
    */    

    /*
    RENAME('path to file','novo nome'): MÉTODO PARA RENOMEAR UM ARQUIVO;
    rename('rename.txt', 'renomeado.txt');
    */    
    
    /*
    RENAME('path to file', 'new path'): MÉTODO PARA MOVER UM ARQUIVO PARA OUTRA PASTA; 
    rename('nome.txt', '../loop/nome.txt');
    */
    
    /*
    COPY('path to file','new path/name.txt'): MÉTODO PARA COPIAR UM ARQUIVO;
    copy('text.txt','../teste.txt');
    */
?>


