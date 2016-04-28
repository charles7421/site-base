<?php

App::uses('AppController', 'Controller');

class FotosController extends AppController {

    public $uses = array('Imagem', 'Album');

    public function index() {
        $options = array('conditions' => array('tipo' => 'Notícias'));
        $albuns = $this->Album->find('all', $options);
        $this->set('albuns', $albuns);
    }

    public function v($slug = null) {
        if (!$slug) {
            $this->redirect('/Acoes/');
            
        }
        
        // Filtrar album selecionado
        $album = $this->Album->findBySlug($slug);
        $this->set('album', $album);
        // Filtrar imagens do album selecionado.            
        $options = array('conditions' => array('Albun.slug' => $slug));
        $imagens = $this->Imagem->find('all', $options);
        $this->set('imagens', $imagens);
        
        
        //pr($imagens);exit;
    }

}
