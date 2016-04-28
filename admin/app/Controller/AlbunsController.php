<?php

App::uses('AppController', 'Controller');

/**
 * Albuns Controller
 *
 * @property Album $Album
 * @property PaginatorComponent $Paginator
 */
class AlbunsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Upload');
    public $uses = array('Album', 'Imagem');
    public $paginate = array('limit' => 5);

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Album->recursive = 0;
        $this->Paginator->settings = $this->paginate;
        $data = $this->Paginator->paginate('Album');
        $this->set('albuns', $data);
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Album->exists($id)) {
            throw new NotFoundException(__('Invalid album'));
        }
        $options = array('conditions' => array('Album.' . $this->Album->primaryKey => $id));
        $this->set('album', $this->Album->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $tamanhos = array('400' => '200', '800' => '500');
        $i = 0;
        $error = false;
        if ($this->request->is('post')) {
            $descricao = $this->request->data['Album']['descricao'];
            $this->request->data['Album']['slug'] = $this->stringToSlug($this->data['Album']['titulo']);
            //pr($this->request->data['Album']['uploadfile']);exit;
            $this->request->data['Album']['caminho_capa'] = $this->Upload->uploadArquivo($this->request->data['Album']['uploadcapa'], $this->request->data['Album']['slug']);
            $imagens = $this->request->data['Album']['uploadfile'];
            $this->Album->create();
            $this->Album->save($this->request->data);
            $AlbumID = $this->Album->id;
            // Salva as imagens

            foreach ($imagens as $file) {
                if ($file['error'] == 4) {
                    $error = true;
                }
            }
//            pr($error);
//            exit;

            if (!$error) {
                foreach ($imagens AS $foto) {
                    $this->Imagem->create();
                    $foto['Imagem']['url'] = $this->Upload->uploadAlbum($foto, 'imagem_' . $i, $tamanhos, $AlbumID);
                    $foto['Imagem']['descricao'] = $descricao;
                    $foto['Imagem']['albun_id'] = $this->Album->id;
                    $this->Imagem->save($foto);
                    $i = $i + 1;
                }
            }

            $this->Session->setFlash(__('A notícia foi salva com sucesso.'));
            return $this->redirect(array('action' => 'index'));
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $tamanhos = array('400' => '200', '800' => '500');
        if (!$this->Album->exists($id)) {
            throw new NotFoundException(__('Invalid album'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $error = false;
            $naoPossuiAlbum = false;
            // cria o "slug" para colocar o nome na foto de capa
            $this->request->data['Album']['slug'] = $this->stringToSlug($this->data['Album']['titulo']);
            // joga as fotos em outras variaveis ($arquivos = imagens do album, $capa = imagem de capa
            $arquivos = $this->request->data['Album']['uploadfile'];
            $capa = $this->request->data['Album']['uploadcapa'];
            //pr($capa);exit;
            // confere se a capa vem nula.
            if ($capa['error'] == 0) {
                $this->request->data['Album']['caminho_capa'] = $this->Upload->uploadArquivo($this->request->data['Album']['uploadcapa'], $this->request->data['Album']['slug']);
            }

            // confere se o array das imagens vem nula.   
            foreach ($arquivos as $file) {
                if ($file['error'] == 4) {
                    $error = true;
                }
            }

            if (!$error) {
                if ($this->verificarSePastaAlbumExiste($id)) {
                    $this->deletarAlbum($id);
                } else {
                    $naoPossuiAlbum = true;
                }
                $descricao = $this->request->data['Album']['descricao'];
                $imagens = $this->request->data['Album']['uploadfile'];
                $i = 0;
                foreach ($imagens AS $foto) {
                    $this->Imagem->create();
                    $foto['Imagem']['url'] = $this->Upload->uploadAlbum($foto, 'imagem_' . $i, $tamanhos, $id);
                    $foto['Imagem']['descricao'] = $descricao;
                    $foto['Imagem']['albun_id'] = $id;
                    $this->Imagem->save($foto);
                    $i = $i + 1;
                }
            }
            if ($this->Album->save($this->request->data)) {
                if (!$naoPossuiAlbum) {
                    $this->Session->setFlash(__('O Álbum e fotos foram salvos com sucesso.'));
                } else {
                    $this->Session->setFlash(__('O Álbum e novas fotos foram salvas com sucesso.'));
                }
            } else {
                $this->Session->setFlash(__('O album não pode ser salvo. Tente novamente.'));
            }
            return $this->redirect(array('action' => 'index'));
        } else {
            $options = array('conditions' => array('Album.' . $this->Album->primaryKey => $id));
            $this->request->data = $this->Album->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Album->id = $id;
        if (!$this->Album->exists()) {
            throw new NotFoundException(__('Invalid album'));
        }
        //$this->request->allowMethod('post', 'delete');
        if ($this->verificarSePastaAlbumExiste($id)) {
            $this->deletarAlbum($id);
        }
        if ($this->Album->delete()) {
            $this->Session->setFlash(__('O Álbum e fotos foram deletadas com sucesso.'));
        } else {
            $this->Session->setFlash(__('O album não pode ser deletado. Tente novamente.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    function deletarAlbum($idAlbum = null) {
        $dir = WWW_ROOT . 'img' . DS . 'uploads' . DS . 'album' . DS . $idAlbum;
        $dirMiniatura = WWW_ROOT . 'img' . DS . 'uploads' . DS . 'album' . DS . $idAlbum . DS . 'mini';

        if (is_dir($dir)) {
            if ($this->Upload->deletarPastas($dir)) {
                if (is_dir($dir)) {
                    $this->Upload->deletarPastas($dirMiniatura);
                }
            }
        }
    }

    function verificarSePastaAlbumExiste($id = null) {
        $dir = WWW_ROOT . 'img' . DS . 'uploads' . DS . 'album' . DS . $id;
        $dirMiniatura = WWW_ROOT . 'img' . DS . 'uploads' . DS . 'album' . DS . $id . DS . 'mini';

        if (is_dir($dir) && is_dir($dirMiniatura)) {
            return true;
        } else {
            return false;
        }
    }

}
