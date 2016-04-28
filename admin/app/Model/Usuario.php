<?php

App::uses('AppModel', 'Model');

/**
 * Usuario Model
 *
 * @property Comentario $Comentario
 * @property Noticia $Noticia
 */
class Usuario extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $displayField = 'nome';
    public $validate = array(
        'nome' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'O nome é obrigatório',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'login' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'O login é obrigatório',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'senha' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'A senha é obrigatório',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    

    public function beforeSave($options = array()) {
        parent::beforeSave($options);
        if (isset($this->data['Usuario']['senha'])) {
            $this->data['Usuario']['senha'] = AuthComponent::password($this->data['Usuario']['senha']);
        }
    }

}
