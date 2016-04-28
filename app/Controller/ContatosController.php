<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class ContatosController extends AppController {

    public $uses = array();
    public function index() {
        
    }

    public function send() {
        if (!empty($this->request->data)) {
            //pr($this->request->data);exit;
            $email = new CakeEmail('smtp');
            $email->template('email_tpl')
                    ->emailFormat('html')
                    ->viewVars(array(
                        'mensagem'=>$this->request->data['txtMensagem'], 
                        'nome'=>$this->request->data['txtNome'], 
                        'email'=>$this->request->data['txtEmail'],
                        'assunto'=>$this->request->data['txtAssunto']))
                    ->from(array($this->request->data['txtEmail'] => $this->request->data['txtEmail']))
                    ->to('charles@uxsolucoes.com.br')
                    ->subject("Enviado via site Futura Máquinas - " . $this->request->data['txtAssunto']);
            if ($email->send()) {
                echo "<script>alert('Mensagem encaminhado com sucesso! Aguarde nosso contato.')</script>";
                echo "<script>window.location = '../Contatos/'</script>";
            }
        }
    }


    public function enviarEmail() {
        //pr($_POST);exit;
        $para = "contato@uxsolucoes.com.br";
        $nome = $_POST['txtNome'];
        $emailRetorno = $_POST['txtEmail'];
        $assunto = $_POST['txtAssunto'];
        $mensagem = "<strong>Nome: </strong>" . $nome;       
        $mensagem .= "<br> <strong>Email: </strong>" . $emailRetorno;
        $mensagem .= "<br> <strong>Mensagem: </strong>" . $_POST['txtMensagem'];
        $headers = "Content-Type:text/html; charset=UTF-8\n";
        $headers .= "From: Contato UX<contato@uxsolucoes.com.br>\n";
        $headers .= "X-Sender: <contato@uxsolucoes.com.br>\n";
        $headers .= "X-Mailer: PHP v" . phpversion() . "\n";
        $headers .= "X-IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
        $headers .= "Return-Path: <contato@uxsolucoes.com.br>\n";
        $headers .= "MIME-Version: 1.0\n";
        mail($para, $assunto, $mensagem, $headers);
        $msg = "Sua mensagem foi enviada com sucesso.";
        echo "<script>location.href=`index`; alert(`$msg`);</script>";
    }
}
