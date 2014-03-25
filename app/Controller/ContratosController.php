<?php

class ContratosControllers extends AppController {

    public $helpers = array ('Html', 'Form');
    public $name = 'Contratos';
    
    function index() {
        $this->set('contratos', $this->Contrato->find('all'));
    }
    
    function view($id = null){
        $this->Contrato->id = $id;
        $this->set('contrato', $this->Contrato->read());
    }
    
    
}
