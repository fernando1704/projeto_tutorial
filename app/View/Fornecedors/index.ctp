<h1>Fornecedores</h1>
<?php echo $this->Html->link('Adicionar Fornecedor', array('controller' => 'fornecedors', 'action' => 'add')) ?>
<table>
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Cidade</td>
        <td>Editar</td>
        <td>Remover</td>
    </tr>
    <?php foreach ($fornecedors as $fornecedor): ?>
        <tr>
            <td><?php echo $fornecedor['Fornecedor']['id']; ?></td>
            <td><?php echo $this->Html->link($fornecedor['Fornecedor']['nome'], array('controller' => 'fornecedors', 'action' => 'view', $fornecedor['Fornecedor']['id'])) ?></td>
            <td><?php echo $fornecedor['Fornecedor']['telefone'] ?></td>
            <td><?php echo $fornecedor['Fornecedor']['cidade'] ?></td>
            <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $fornecedor['Fornecedor']['id'])) ?></td>
            <td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $fornecedor['Fornecedor']['id']), array('confirm' => 'Remover Fornecedor?')) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
