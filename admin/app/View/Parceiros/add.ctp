<div class="row">
    <div class="col-lg-12">
        <div class="container">
            <div class="">
                <?php echo $this->Form->create('Parceiro', array('type' => 'file')); ?>
                <h2>Adicionar novo Parceiro</h2>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <?php
     //		echo $this->Form->input('logo', array('class' => 'form-control'));
                    echo $this->Form->input('nome', array('class' => 'form-control'));
                    echo $this->Form->input('link', array('class' => 'form-control'));
                    ?>
                    <?php
                    echo '<label>' . 'Logo' . '</label>';
                    echo $this->Form->file('uploadfile', array('title' => 'logo do Parceiro.', 'required' => 'true'));
                    ?>
                    <hr/>
                </div>
                <?php echo $this->Form->button('Salvar', array('class' => 'btn btn-primary')); ?>
            </div>
        </div>
    </div>
</div>
