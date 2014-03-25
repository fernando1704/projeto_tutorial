<?php

class FornecedorsController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Fornecedors';

    public function index() {
        $this->set('fornecedors', $this->Fornecedor->find('all'));
    }

    public function view($id = null) {
        $this->Fornecedor->id = $id;
        $this->set('fornecedor', $this->Fornecedor->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Fornecedor->save($this->request->data)) {
                $this->Session->setFlash('Fornecedor cadastrado com sucesso.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit($id = null) {
        $this->Fornecedor->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Fornecedor->read();
        } else {
            if ($this->Fornecedor->save($this->request->data)) {
                $this->Session->setFlash('Fornecedor atualizado com sucesso.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Fornecedor->delete($id)) {
            $this->Session->setFlash('O Fornecedor com id: ' . $id . ' foi removido');
            $this->redirect(array('action' => 'index'));
        }
    }

}
