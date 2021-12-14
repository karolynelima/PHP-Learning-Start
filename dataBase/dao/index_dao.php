<?php
/*
    - CRUD: CREATE / READ / UPDATE / DELETE;
*/
require '../config.php';
require 'UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
?>

<a href="adicionar_dao.php">ADICIONAR USUÁRIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID    </th>
        <th>NOME  </th>
        <th>EMAIL </th>
        <th>AÇÕES </th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?= $usuario->getId();     ?></td>
            <td><?= $usuario->getNome();   ?></td>
            <td><?= $usuario->getEmail();  ?></td>
            <td>
                <a href="editar_dao.php?id=<?= $usuario->getId();?>">[Editar]</a>                                       
                <a href="excluir_dao.php?id=<?= $usuario->getId();?>" onclick="return confirm('Confirmar exclusão?')">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>