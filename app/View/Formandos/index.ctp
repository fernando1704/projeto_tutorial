<h1>Formandos</h1>
<?php echo $this->Html->link('Adicionar Formando', array('controller' => 'formandos', 'action' => 'add')) ?>
<table>
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Cidade</td>
        <td>CPF</td>
        <td>Editar</td>
        <td>Remover</td>
    </tr>
    <?php foreach ($formandos as $formando): ?>
        <tr>
            <td><?php echo $formando['Formando']['id']; ?></td>
            <td><?php echo $this->Html->link($formando['Formando']['nome'], array('controller' => 'formandos', 'action' => 'view', $formando['Formando']['id'])) ?></td>
            <td><?php echo $formando['Formando']['telefone'] ?></td>
            <td><?php echo $formando['Formando']['cidade'] ?></td>
            <td><?php echo $formando['Formando']['cpf'] ?></td>
            <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $formando['Formando']['id'])) ?></td>
            <td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $formando['Formando']['id']), array('confirm' => 'Remover Formando?')) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
