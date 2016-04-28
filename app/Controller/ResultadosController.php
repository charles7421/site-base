<?php

App::uses('AppController', 'Controller');

class ResultadosController extends AppController {
    
    public $uses = array('Produto', 'Empresa', 'Imagem', 'Album');
    public $teste = array();
    
    public $components = array();

    public function p($pesquisa = null) {
        //pr($_POST);exit;

        $this->set('pesquisa', $pesquisa);
        if ($pesquisa == null) {
            $pesquisa = $_POST['iptBusca'];
            $this->redirect(array('controller' => 'Resultados', 'action' => 'p', $pesquisa));
        }

        // Busca produtos de acordo com a pesquisa
        $options = array('conditions' => array(
            'Produto.nome LIKE' => "%".$pesquisa."%"));
        $produtos = $this->Produto->find('all', $options);
        $totalProdutos = $this->Produto->find('count', $options);
        $this->set('totalProdutos', $totalProdutos);
        $this->set('produtos', $produtos);


        // Busca notícias de acordo com a pesquisa
        $options = array('conditions' => array(
            'Album.titulo LIKE' => "%".$pesquisa."%",
            'Album.tipo' => 'Notícias'));
        $noticias = $this->Album->find('all', $options);
        $totalNoticias = $this->Album->find('count', $options);
        $this->set('totalNoticias', $totalNoticias);
        $this->set('noticias', $noticias);        

        //pr($produtos);pr($noticias);exit;
    }
}
