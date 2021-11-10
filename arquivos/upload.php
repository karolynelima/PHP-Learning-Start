<!-- UPLOAD DE ARQUIVOS
METHOD "POST": UPLOAD DE ARQUIVOS DEVEM SER ENVIADOS PELO MÉTODO POST, NO CORPO DA REQUISIÇÃO;
ACTION: LOCAL QUE IRÁ RECEBER O ARQUIVO;
ENCTYPE"MULTIPART/FORM-DATA": UTILIZADO PARA ENVIO DE ARQUIVOS;    
-->

<form method="POST" action="receiver.php" enctype="multipart/form-data">
    <input type="file"   name="arquivo" />
    <input type="submit" value="Enviar" />
</form>