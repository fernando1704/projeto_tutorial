<h1>Adicionar Fornecedor</h1>
<?php
echo $this->Form->create('Fornecedor');
echo $this->Form->input('nome');
echo $this->Form->input('telefone');
echo $this->Form->input('rua');
echo $this->Form->input('numero', array('label' => 'Número'));
echo $this->Form->input('bairro');
echo $this->Form->input('cep');
echo $this->Form->input('cidade');
echo $this->Form->input('estado');
echo $this->Form->input('cnpj', array('label' => 'CNPJ'));
echo $this->Form->input('cpf', array('label' => 'CPF'));
echo $this->Form->input('tipo', array('label' => 'Tipo de Fornecedor', 'options' => array('buffet' => 'Buffet','banda' => 'Banda','decoracao' => 'Decoração',
    'cerimonial' => 'Cerimonial','equipe_segurança' => 'Equipe de Segurança', 'sonorizacao' => 'Sonorização', 'montagem' => 'Montagem'), 'emtpy' => 'Selecione um tipo'));
echo $this->Form->end('Cadastrar');
?>