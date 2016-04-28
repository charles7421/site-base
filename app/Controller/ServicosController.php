<?php

App::uses('AppController', 'Controller');

class ServicosController extends AppController {

	public $uses = array('Produto', 'Imagem');
    
    public function index() {
		$options = array('conditions' => array('tipo' => 'Servico'), 'order' => array('Produto.id' => 'DESC'));
        $servicos = $this->Produto->find('all', $options);
        $this->set('servicos', $servicos);
        //pr($servicos);exit;
    }

    public function s($slug = null){
    	if (!$slug) {
            $this->redirect('/Servicos/');
            
        }        
        // Filtrar produto selecionado
        $servico = $this->Produto->findBySlug($slug);
        $this->set('servico', $servico);

        // Filtrar imagens do album selecionado.            
        $options = array('conditions' => array('Imagem.produto_id' => $produto['Produto']['id']));
        $imagens = $this->Imagem->find('all', $options);
        $this->set('imagens', $imagens);
        pr($servico);pr($imagens);exit;
    }
}
