<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>E-mail</td>
    </tr>
    <? foreach($listaCliente as $cliente): ?>
    <tr>
        <td><?=$cliente['id']?></td>
        <td><?=$cliente['nome']?></td>
        <td><?=$cliente['email']?></td>
    </tr>
    <? endforeach; ?>
</table>