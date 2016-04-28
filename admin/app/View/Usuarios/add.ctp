<div class="row">
    <div class="col-lg-12">
        <div class="container">
            <div class="">
                <?php echo $this->Form->create('Usuario'); ?>
                <h2>Adicionar novo usuário</h2>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <?php
                    echo $this->Form->input('nome', array('class' => 'form-control'));
                    echo $this->Form->input('login', array('class' => 'form-control'));
                    echo $this->Form->input('senha', array('type' => 'password', 'class' => 'form-control'));
                    ?>
                </div>
                <?php echo $this->Form->button('Salvar', array('class' => 'btn btn-primary')); ?>
            </div>
        </div>
    </div>
</div>

