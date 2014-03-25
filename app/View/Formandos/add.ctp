<h1>Adicionar Formando</h1>
<?php
echo $this->Form->create('Formando');
echo $this->Form->input('nome');
echo $this->Form->input('telefone');
echo $this->Form->input('rua');
echo $this->Form->input('numero', array('label' => 'Número'));
echo $this->Form->input('bairro');
echo $this->Form->input('cep');
echo $this->Form->input('cidade');
echo $this->Form->input('estado');
echo $this->Form->input('cpf', array('label' => 'CPF'));
echo $this->Form->input('ano_formatura', array('label' => 'Ano de Formatura'));
echo $this->Form->end('Cadastrar');
?>