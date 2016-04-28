<?php

App::uses('AppController', 'Controller');

class InicioController extends AppController {
    
    public $uses = array('Produto', 'Empresa', 'Imagem', 'Album');
    public $teste = array();
    
    public $components = array('Paginator', 'Upload');
    public function index() {
        $this->Produto->recursive = 0;
        $this->Album->recursive = 0;

        // Pega dados da empresa
        $empresas = $this->Empresa->find('all');
        $this->set('empresas', $empresas);
        
        // Pega ultimos produtos
        $options = array('conditions' => array('tipo' => 'Produto'), 'order' => array('Produto.id' => 'DESC'), 'limit' => '3');
        $produtos = $this->Produto->find('all', $options);
        $this->set('produtos', $produtos);
        
        
        // Pega imagens para sliders principal
        $options = array('conditions' => array('Albun.tipo' => 'Empresa'));
        $imagens = $this->Imagem->find('all', $options);
        $this->set('imagens', $imagens);
        //pr($imagens);
    }

    public function carregarProdutos() {
        // Pega todos produtos
        $options = array('conditions' => array('tipo' => 'Produto', 'Categoria' => 'Novo'), 'order' => array('Produto.id' => 'DESC'));
        $todosProdutos = $this->Produto->find('all', $options);
        $this->set('todosProdutos', $todosProdutos);
        //pr($todosProdutos);exit;
    }

}
