<!-- File: /app/View/Posts/index.ctp -->
<h1>Posts do Blog</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Número de Formandos</th>
        <th>Data de Criação</th>
    </tr>
    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
    as informações dos posts -->
    <?php foreach ($contratos as $contrato): ?>
        <tr>
            <td><?php echo $contrato['Contrato']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($contrato['Contrato']['numero_formandos'] ,
                        array('controller' => 'contratos', 'action' => 'view', $contrato['Contrato']['id']));
                ?>
            </td>
            <td><?php echo $contrato['Contrato']['created']; ?></td>
        </tr>
<?php endforeach; ?>
</table>

