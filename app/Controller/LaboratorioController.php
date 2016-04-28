<?php

App::uses('AppController', 'Controller');

class LaboratorioController extends AppController {

    public $uses = array();
    public function index() {
        
    }

    public function buscar() {
        pr($this->request->data);exit;
    }

}
