<?php
App::uses('AppController', 'Controller');
/**
 * Imagens Controller
 *
 * @property Imagem $Imagem
 * @property PaginatorComponent $Paginator
 */
class ImagensController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Imagem->recursive = 0;
		$this->set('imagens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Imagem->exists($id)) {
			throw new NotFoundException(__('Invalid imagem'));
		}
		$options = array('conditions' => array('Imagem.' . $this->Imagem->primaryKey => $id));
		$this->set('imagem', $this->Imagem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Imagem->create();
			if ($this->Imagem->save($this->request->data)) {
				$this->Session->setFlash(__('The imagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imagem could not be saved. Please, try again.'));
			}
		}
		$albuns = $this->Imagem->Albun->find('list');
		$produtos = $this->Imagem->Produto->find('list');
		$this->set(compact('albuns', 'produtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Imagem->exists($id)) {
			throw new NotFoundException(__('Invalid imagem'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Imagem->save($this->request->data)) {
				$this->Session->setFlash(__('The imagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imagem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Imagem.' . $this->Imagem->primaryKey => $id));
			$this->request->data = $this->Imagem->find('first', $options);
		}
		$albuns = $this->Imagem->Albun->find('list');
		$produtos = $this->Imagem->Produto->find('list');
		$this->set(compact('albuns', 'produtos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Imagem->id = $id;
		if (!$this->Imagem->exists()) {
			throw new NotFoundException(__('Invalid imagem'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Imagem->delete()) {
			$this->Session->setFlash(__('The imagem has been deleted.'));
		} else {
			$this->Session->setFlash(__('The imagem could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
