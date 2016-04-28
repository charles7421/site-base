<?php
App::uses('AppModel', 'Model');
/**
 * Curriculo Model
 *
 * @property Vaga $Vaga
 */
class Curriculo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vaga' => array(
			'className' => 'Vaga',
			'foreignKey' => 'vaga_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
