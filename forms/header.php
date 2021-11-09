<h2> HTTP REQUESTS </h2>
<!-- 
-ISSET(): UTILIZADO PARA VALIDAR SE O COMANDO ESTÁ SETADO, SE NÃO ESTIVER SETADO NÃO DÁ ERRO;
    
-->
<?php
    if(isset($_COOKIE['nome'])){
        $nome = $_COOKIE['nome'];
        echo '<h2>'.$nome.'</h2>';
    }
?>
<hr/>


