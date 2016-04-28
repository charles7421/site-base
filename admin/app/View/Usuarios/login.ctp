<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <br><br><br><br><br>
        <div>
            <?php echo $this->Html->image('logo_admin.png', array('alt' => 'Gaúcha Alimentação'))?>
        </div>
        <hr/>
        <br/>
        <?php echo $this->Session->flash('auth', array('class' => 'alert alert-danger ')); ?>
        <br/>
        <?php
        echo $this->Form->create('Usuario', array('class' => 'form-login'));
        echo $this->Form->input('login', array('class' => 'form-control', 'autofocus'));
        echo $this->Form->input('senha', array('type' => 'password', 'class' => 'form-control'));
        echo '<br/>';
        echo $this->Form->button('Entrar', array('type' => 'submit', 'class' => 'btn btn-primary block full-width m-b'));
        ?>
        <a href="http://uxsolucoes.com.br" class="btn-link" target="_blank">
            <p class="m-t">
                <small>UX Soluções em TI &copy; 2015</small> 
            </p>
        </a>
    </div>
</div>
