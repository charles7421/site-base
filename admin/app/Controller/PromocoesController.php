<?php
App::uses('AppController', 'Controller');
/**
 * Promocoes Controller
 *
 * @property Promocao $Promocao
 * @property PaginatorComponent $Paginator
 */
class PromocoesController extends AppController {

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
		$this->Promocao->recursive = 0;
		$this->set('promocoes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Promocao->exists($id)) {
			throw new NotFoundException(__('Invalid promocao'));
		}
		$options = array('conditions' => array('Promocao.' . $this->Promocao->primaryKey => $id));
		$this->set('promocao', $this->Promocao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Promocao->create();
			if ($this->Promocao->save($this->request->data)) {
				$this->Session->setFlash(__('Promoção salva com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promocao could not be saved. Please, try again.'));
			}
		}
		$produtos = $this->Promocao->Produto->find('list');
		$this->set(compact('produtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Promocao->exists($id)) {
			throw new NotFoundException(__('Invalid promocao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Promocao->save($this->request->data)) {
				$this->Session->setFlash(__('Promoção editada com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promocao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Promocao.' . $this->Promocao->primaryKey => $id));
			$this->request->data = $this->Promocao->find('first', $options);
		}
		$produtos = $this->Promocao->Produto->find('list');
		$this->set(compact('produtos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Promocao->id = $id;
		if (!$this->Promocao->exists()) {
			throw new NotFoundException(__('Invalid promocao'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Promocao->delete()) {
			$this->Session->setFlash(__('Promoção excluida com sucesso.'));
		} else {
			$this->Session->setFlash(__('The promocao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
