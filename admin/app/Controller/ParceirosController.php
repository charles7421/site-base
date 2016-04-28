<?php
App::uses('AppController', 'Controller');
/**
 * Parceiros Controller
 *
 * @property Parceiro $Parceiro
 * @property PaginatorComponent $Paginator
 */
class ParceirosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Upload');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Parceiro->recursive = 0;
		$this->set('parceiros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Parceiro->exists($id)) {
			throw new NotFoundException(__('Invalid parceiro'));
		}
		$options = array('conditions' => array('Parceiro.' . $this->Parceiro->primaryKey => $id));
		$this->set('parceiro', $this->Parceiro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
            
            $tamanhos = array('400' => '200', '600' => '300');
            
		if ($this->request->is('post')) {
                    //r($this->request->data);exit;
                    $this->request->data['Parceiro']['slug'] = $this->stringToSlug($this->data['Parceiro']['nome']);
                    $this->request->data['Parceiro']['logo'] = $this->Upload->uploadParceiro($this->request->data['Parceiro']['uploadfile'], $this->request->data['Parceiro']['slug']);
			$this->Parceiro->create();
			if ($this->Parceiro->save($this->request->data)) {
				$this->Session->setFlash(__('O parceiro foi salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parceiro could not be saved. Please, try again.'));
			}
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
		if (!$this->Parceiro->exists($id)) {
			throw new NotFoundException(__('Invalid parceiro'));
		}
		if ($this->request->is(array('post', 'put'))) {
                    $this->request->data['Parceiro']['slug'] = $this->stringToSlug($this->data['Parceiro']['nome']);
                    $this->request->data['Parceiro']['logo'] = $this->Upload->uploadParceiro($this->request->data['Parceiro']['uploadfile'], $this->request->data['Parceiro']['slug']);
			if ($this->Parceiro->save($this->request->data)) {
				$this->Session->setFlash(__('Parceiro editado com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parceiro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Parceiro.' . $this->Parceiro->primaryKey => $id));
			$this->request->data = $this->Parceiro->find('first', $options);
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
		$this->Parceiro->id = $id;
		if (!$this->Parceiro->exists()) {
			throw new NotFoundException(__('Invalid parceiro'));
		}
		$this->request->allowMethod('post', 'delete');
                $parceiro = $this->Parceiro->findById($id);
                $this->set('parceiro', $parceiro);
		if (isset($parceiro['Parceiro']['logo'])) {
                $caminho = WWW_ROOT . 'img' . DS . 'uploads' . DS . 'parceiros' . DS . $parceiro['Parceiro']['logo'];
                $this->deletarArquivo($caminho);
                }
            $this->Session->setFlash(__('Parceiro deletado com sucesso.'));
            if ($this->Parceiro->delete()) {
                $this->Session->setFlash(__('Parceiro deletado com sucesso.'));
            } else {
                $this->Session->setFlash(__('Parceiro não pode ser deletado. Tente novamente.'));
            }
            return $this->redirect(array('action' => 'index'));
        }
        
        function deletarArquivo($arquivo = null) {
        $dir = $arquivo;
        //pr($dir);exit;
            if (file_exists($dir)) {
                return unlink($dir);
            }
        }
}
