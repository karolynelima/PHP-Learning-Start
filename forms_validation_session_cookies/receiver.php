<!-- 
1: VERIFICAR SE AS INFORMAÇÕES FORAM ENVIADAS
2: VALIDAR OS DADOS
-->
<?php 
    /*
    FILTER_INPUT:                   METÓDO PARA VERIFICAÇÃO DE CAMPOS;
    FILTER_VALIDATE_EMAIL:          FILTRO PARA VALIDAÇÃO DE EMAIL;
    FILTER_VALIDATE_INT/FLOAT:      FILTRO PARA VALIDAÇÃO DE NÚMEROS INTEIROS, SE TIVER OUTRO TIPO DE CARACTERE NÃO PASSA;
    FILTER_VALIDATE_URL:            FILTRO PARA VALIDAÇÃO DE URL;
    FILTER_VALIDATE_IP:             FILTRO PARA VALIDAÇÃO DE IP;
    FILTER_SANITIZE_NUMBER_INT:     FILTRO PARA REGISTRAR APENAS OS NÚMEROS INTEIROS DIGITADOS;
    FILTER_SANITIZE_SPECIAL_CHARS:  FILTRO PARA VALIDAÇÃO DE CARACTERES NÃO ESPECIAIS, UTILIZADO PARA NOMES;
    FILTER_SANITAZE_EMAIL:          FILTRO QUE RETIRA TUDO QUE NÃO FAZ PARTE DE UM EMAIL;
    FILTER_VAR($var, FILTER_...):   FILTRO UTILIZADO PARA VARIAVEIS;
    */
    session_start();

    $nome  = filter_input(INPUT_POST, 'nome' , FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($nome && $idade && $email){
        /*
        COOKIES:DEVEM SER SETADOS ANTES DA EXIBIÇÃO DE QUALQUER INFORMAÇÃO
                MESMO APÓS O SITE TER SIDO FECHADO AS INFORMAÇÕES SERÃO MANTIDAS            
        */
        $expirar = time() + (86400 * 30); //O COOKIE IRÁ VALER POR 30 DIAS E DEPOIS EXPIRAR
        setcookie('nome', $nome, $expiracao);

        echo 'NOME:  '.$nome. '<br/>';
        echo 'EMAIL: '.$email.'<br/>';
        echo 'IDADE: '.$idade.'<br/>';
    }else{
        $_SESSION['aviso'] = "<h3>Preencha os intens corretamente!</h3>";
        //REDIRECIONAMENTO SÓ PODE SER FEITO QUANDO NADA É ENVIADO PARA A TELA
        header("Location: index.php");
        //CANCELA A EXECUCAÇÃO DO RESTO DO CÓDIGO
        exit;
    }
?>