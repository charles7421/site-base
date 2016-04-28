<?php
App::uses('AppController', 'Controller');
/**
 * Produtos Controller
 *
 * @property Produto $Produto
 * @property PaginatorComponent $Paginator
 */
class ProdutosController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $components = array('Paginator', 'Upload');
    public $uses = array('Produto', 'Imagem');
    public $paginate = array('limit' => 10);

/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->Produto->recursive = 0;
        $this->Paginator->settings = $this->paginate;
        $data = $this->Paginator->paginate('Produto');
        $this->set('produtos', $data);
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException(__('Invalid produto'));
		}
		$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
		$this->set('produto', $this->Produto->find('first', $options));
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
                    $descricao = $this->request->data['Produto']['descricao'];
                    $this->request->data['Produto']['slug'] = $this->stringToSlug($this->data['Produto']['nome']);
                    //pr($this->request->data['Album']['uploadfile']);exit;
                    $this->request->data['Produto']['caminho_capa'] = $this->Upload->uploadArquivo($this->request->data['Produto']['uploadcapa'], $this->request->data['Produto']['slug']);
                    $imagens = $this->request->data['Produto']['uploadfile'];
                    $this->Produto->create();

                    if ($this->request->data['Produto']['uploadArquivo']['error'] != 4) {
                        $this->request->data['Produto']['arquivo'] = $this->Upload->uploadOutro($this->request->data['Produto']['uploadArquivo'], 'arquivo_' . $this->request->data['Produto']['slug']);
                    }
                    $this->Produto->save($this->request->data);
                    $ProdutoID = $this->Produto->id;
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
                            $foto['Imagem']['url'] = $this->Upload->uploadAlbum($foto, 'imagem_' . $i, $tamanhos, $ProdutoID);
                            $foto['Imagem']['descricao'] = $descricao;
                            $foto['Imagem']['produto_id'] = $this->Produto->id;
                            $this->Imagem->save($foto);
                            $i = $i + 1;
                        }
                    }

                    $this->Session->setFlash(__('O Produto/Serviço foi salva com sucesso.'));
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
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException(__('Invalid produto'));
		}
		if ($this->request->is(array('post', 'put'))) {
            $error = false;
            $naoPossuiAlbum = false;
            // cria o "slug" para colocar o nome na foto de capa
            $this->request->data['Produto']['slug'] = $this->stringToSlug($this->data['Produto']['nome']);

            if ($this->request->data['Produto']['uploadArquivo']['error'] != 4) {
                $this->request->data['Produto']['arquivo'] = $this->Upload->uploadOutro($this->request->data['Produto']['uploadArquivo'], 'arquivo_' . $this->request->data['Produto']['slug']);
            }
            // joga as fotos em outras variaveis ($arquivos = imagens do album, $capa = imagem de capa
            $arquivos = $this->request->data['Produto']['uploadfile'];
            $capa = $this->request->data['Produto']['uploadcapa'];
            //pr($capa);exit;
            // confere se a capa vem nula.
            if ($capa['error'] == 0) {
                $this->request->data['Produto']['caminho_capa'] = $this->Upload->uploadArquivo($this->request->data['Produto']['uploadcapa'], $this->request->data['Produto']['slug']);
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
                $descricao = $this->request->data['Produto']['descricao'];
                $imagens = $this->request->data['Produto']['uploadfile'];
                $i = 0;
                foreach ($imagens AS $foto) {
                    $this->Imagem->create();
                    $foto['Imagem']['url'] = $this->Upload->uploadAlbum($foto, 'imagem_' . $i, $tamanhos, $id);
                    $foto['Imagem']['descricao'] = $descricao;
                    $foto['Imagem']['produto_id'] = $id;
                    $this->Imagem->save($foto);
                    $i = $i + 1;
                }
            }
            if ($this->Produto->save($this->request->data)) {
                if (!$naoPossuiAlbum) {
                    $this->Session->setFlash(__('O Produto/Serviço foram salvos com sucesso.'));
                } else {
                    $this->Session->setFlash(__('O Produto/Serviço foram salvas com sucesso.'));
                }
            } else {
                $this->Session->setFlash(__('O Produto/Serviço não pode ser salvo. Tente novamente.'));
            }
            return $this->redirect(array('action' => 'index'));
        } else {
            $options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
            $this->request->data = $this->Produto->find('first', $options);
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
		$this->Produto->id = $id;
		if (!$this->Produto->exists()) {
			throw new NotFoundException(__('Invalid produto'));
		}
		$this->request->allowMethod('post', 'delete');
                $produto = $this->Produto->findById($id);
                $this->set('produto', $produto);
                if (!isset($this->request->data['Produto']['arquivo'])) {
                    $caminho = WWW_ROOT . 'files' . DS . $produto['Produto']['arquivo'];
                }
                $this->deletarArquivo($caminho);
                if ($this->verificarSePastaAlbumExiste($id)) {
                    $this->deletarAlbum($id);
                }
		if ($this->Produto->delete()) {
			$this->Session->setFlash(__('O Produto/Serviço foi excluido com sucesso.'));
		} else {
			$this->Session->setFlash(__('O Produto/Serviço não pode ser deletado. Tente novamente ou entre em contato com o administrador.'));
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
        
        function deletarArquivo($arquivo = null) {
        $dir = $arquivo;
        //pr($dir);exit;
            if (file_exists($dir)) {
                return unlink($dir);
            }
        }
}
