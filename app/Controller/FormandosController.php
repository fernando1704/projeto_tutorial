<?php

class FormandosController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Formandos';

    public function index() {
        $this->set('formandos', $this->Formando->find('all'));
    }

    public function view($id = null) {
        $this->Formando->id = $id;
        $this->set('formando', $this->Formando->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Formando->save($this->request->data)) {
                $this->Session->setFlash('Formando cadastrado com sucesso.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit($id = null) {
        $this->Formando->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Formando->read();
        } else {
            if ($this->Formando->save($this->request->data)) {
                $this->Session->setFlash('Formando atualizado com sucesso.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Formando->delete($id)) {
            $this->Session->setFlash('O Formando com id: ' . $id . ' foi removido');
            $this->redirect(array('action' => 'index'));
        }
    }

}
