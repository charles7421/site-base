<?php

App::uses('AppController', 'Controller');

class InstitucionalController extends AppController {
    
    public $uses = array('Imagem', 'Empresa');

    public function index() {

    	$empresas = $this->Empresa->find('all');
        $this->set('empresas', $empresas);

        $options = array('conditions' => array('Albun.tipo' => 'Empresa'));
        $imagens = $this->Imagem->find('all', $options);
        $this->set('imagens', $imagens);
        //pr($empresas); pr($imagens);exit;
    }

}
