<?php

App::uses('AppController', 'Controller');

class ProdutosController extends AppController {

	public $uses = array('Produto', 'Imagem');
    
    public function index() {
		$options = array('conditions' => array('tipo' => 'Produto', 'Categoria' => 'Novo'), 'order' => array('Produto.id' => 'DESC'));
        $produtos = $this->Produto->find('all', $options);
        $this->set('produtos', $produtos);
        //pr($produtos);exit;
    }

    public function p($slug = null){
    	if (!$slug) {
            $this->redirect('/Produtos/');
            
        }        
        // Filtrar produto selecionado
        $produto = $this->Produto->findBySlug($slug);
        $this->set('produto', $produto);

        // Filtrar imagens do album selecionado.            
        $options = array('conditions' => array('Imagem.produto_id' => $produto['Produto']['id']));
        $imagens = $this->Imagem->find('all', $options);
        $this->set('imagens', $imagens);
        //pr($produto);pr($imagens);exit;
    }

    public function Usados(){        
        $options = array('conditions' => array('tipo' => 'Produto', 'Categoria' => 'Usado'), 'order' => array('Produto.id' => 'DESC'));
        $produtos = $this->Produto->find('all', $options);
        $this->set('produtos', $produtos);
        //pr($produtos);exit;
    }

    public function Pecas(){        
        $options = array('conditions' => array('tipo' => 'Peça'), 'order' => array('Produto.id' => 'DESC'));
        $pecas = $this->Produto->find('all', $options);
        $this->set('pecas', $pecas);
        //pr($pecas);exit;
    }

}
