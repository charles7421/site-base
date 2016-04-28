<?php

App::uses('AppModel', 'Model');

/**
 * Vaga Model
 *
 * @property Curriculo $Curriculo
 */
class Vaga extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    
    public $displayField = 'descricao';
    public $hasMany = array(
        'Curriculo' => array(
            'className' => 'Curriculo',
            'foreignKey' => 'vaga_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}
