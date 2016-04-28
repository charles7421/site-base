<?php

App::uses('AppController', 'Controller');

class ParceirosController extends AppController {

	public $uses = array('Parceiro');
    
    public function index() {
        $parceiros = $this->Parceiro->find('all');
        $this->set('parceiros', $parceiros);
        //pr($parceiros);exit;
    }

}
