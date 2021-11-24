<?php
//require 'classes/matematica.php';
/*
-AUTOLOAD: PROCESSO QUE É FEITO NO CÓDIGO DE FORMA QUE O PHP CONSIGA IDENTIFICAR A CLASSE QUE ESTÁ
 SENDO CHAMADA SEM PRECISAR SER FEITO UM 'REQUIRE' EM TODAS AS CLASSES. SE É CRIADO UM PROCEDIMENTO
 QUE FARÁ ISSO AUTOMATICAMENTE;
-SPL_AUTOLOAD_REGISTER(função anonima(classe)): FUNÇÃO QUE REGISTRA O AUTOLOAD;
-PCR-4: TODA CLASSE DE AUTOLOADA UTLIZA ESSA PCR;
        DEVE POSSUIR UM NAMESPACE COMPATÍVEL COM O AUTOLOAD;
*/
spl_autoload_register(function($class){
    /*
    VERIFICA SE O ARQUIVO EXISTE;
    if(file_exists('classes/'.$class.'.php')){
        require 'classes/'.$class.'.php';
    }
    echo "CLASSE: ".$class;
    */    
    //__DIR__: VÁRIAVEL GLOBAL QUE PEGA O DIRETORIO PRESENTE;
    $baseDir = __DIR__.'/classes/';
    $file = $baseDir.str_replace('\\', '/', $class).'.php';
    if(file_exists($file)){
        require $file;
    }
});

?>