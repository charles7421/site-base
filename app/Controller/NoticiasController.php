<?php

App::uses('AppController', 'Controller');

/**
 * Noticias Controller
 *
 * @property Noticia $Noticia
 * @property PaginatorComponent $Paginator
 */
class NoticiasController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Upload');
    public $uses = array('Album', 'Imagem');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $options = array('conditions' => array('tipo' => 'Notícias'), 'order' => array('Album.id' => 'DESC'));
        $albuns = $this->Album->find('all', $options);
        $this->set('albuns', $albuns);
        //pr($albuns);exit;
    }

    public function ver($slug = null) {
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
        
        
        //pr($album);pr($imagens);exit;
    }
}
