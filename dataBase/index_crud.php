<?php
/*
    - CRUD: CREATE / READ / UPDATE / DELETE;
*/
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>
<a href="adicionar.php">ADICIONAR USUÁRIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID    </th>
        <th>NOME  </th>
        <th>EMAIL </th>
        <th>AÇÕES </th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?= $usuario['ID'];   ?></td>
            <td><?= $usuario['nome']; ?></td>
            <td><?= $usuario['email'];?></td>
            <td>
                <a href="editar.php?id=<?= $usuario['ID'];?>">[Editar]</a>            
                <a href="excluir.php?id=<?= $usuario['ID'];?>" onclick="return confirm('Confirmar exclusão?')">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>