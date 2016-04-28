<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

	public $uses = array('Album');

	public $paginate = array(
		'limit'=> 5,
		);

	function stringToSlug($str) {
		$str = Inflector::slug($str);
		$str = strtolower($str);
		return $str;
	}

	public function beforeFilter()
	{
		$options = array('conditions' => array('tipo' => 'Notícias'), 'order' => array('Album.id' => 'DESC'), 'limit' => 5);
		$albuns = $this->Album->find('all', $options);
		$this->set('albuns', $albuns);
		//pr($albuns);exit;
	}

}
