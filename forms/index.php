<!-- REQUISIÇÕES HTTP -->
<?php 
    require('header.php');
?>

<!-- 
METHOD POST: ENVIA INTERNAMENTE OS DADOS PARA O ARQUIVO ESPECIFICADO NO 
COMANDO ACTION;

METHOD GET: MANDA OS DADOS VIA URL, POSSIBILITANDO AO USUÁRIO 
VISUALIZAR AS MESMAS;

ACTION: RECEBE O NOME DO ARQUIVO PRA ONDE SERÃO ENVIADOS OS 
DADOS DO FORMULÁRIO;

OBS1: QUANDO A ACTION N É ESPECIFICADA OS DADOS SERÃO ENVIADOS
PARA O PRÓPRIO ARQUIVO, NESSE CASO O 'INDEX.PHP';

OBS2: SE O METHOD NÃO FOR ESPECIFICADO É FEITO POR PADRÃO O 
METHOD GET;
-->

<form method="POST" action="receiver.php">
    <label>
        Nome:
        <br/>
        <input type="text" name="nome"/>
    </label>
    <br/>
    <br/>

    <label>
        E-mail:
        <br/>
        <input type="text" name="email"/>
    </label>
    <br/>
    <br/>

    <label>
        Idade:
        <br/>
        <input type="text" name="idade"/>
    </label>
    <br/>
    <br/>

    <input type="submit" value="Enviar"/>
</form>






