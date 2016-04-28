<?php

App::uses('AppController', 'Controller');

class BuscasController extends AppController {

    public $uses = array('Produto', 'Album');
    public function index() {
        
    }

    public function p($pesquisa = null) {
    	//pr($this->request->data);exit;

		if ($pesquisa == null) {
			$pesquisa = $this->request->data['Busca']['pesquisar'];
			$this->redirect(array('controller' => 'Buscas', 'action' => 'p', $pesquisa));
		} 

        // Busca produtos de acordo com a pesquisa
        $options = array('conditions' => array('Produto.nome LIKE' => "%".$pesquisa."%"));
        $produtos = $this->Produto->find('all', $options);
        $this->set('produtos', $produtos);

		// Busca notícias de acordo com a pesquisa
        $options = array('conditions' => array('Album.titulo LIKE' => "%".$pesquisa."%"));
        $noticias = $this->Album->find('all', $options);
        $this->set('noticias', $noticias);        

        //pr($produtos);pr($noticias);exit;
        
    }

}
