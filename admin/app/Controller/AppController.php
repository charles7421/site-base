<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $components = array(
        'Session',
        'Auth' => array(
            'loginAction' => array('controller' => 'usuarios', 'action' => 'login'),
            'loginRedirect' => array('controller' => 'albuns', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'usuarios', 'action' => 'login'),
            'authenticate' => array('Form' => array('userModel' => 'Usuario', 'fields' => array('username' => 'login', 'password' => 'senha'))),
            'authError' => 'Olá Visitante. Faça o login, com seu usuário e senha.',
            'authorize' => array('Controller')
        )
    );

    public function isAuthorized($usuario) {
        return true;
    }

    function stringToSlug($str) {
        $str = Inflector::slug($str);
        $str = strtolower($str);
        return $str;
    }

    
}
