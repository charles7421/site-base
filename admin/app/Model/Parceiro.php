<?php
App::uses('AppModel', 'Model');
/**
 * Parceiro Model
 *
 */
class Parceiro extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'logo' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
