<div class="row">
    <div class="col-lg-12">
        <div class="container">
            <div class="">
                <?php echo $this->Form->create('Promocao'); ?>
                <h2>Adicionar nova Promoção</h2>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
	<?php
		echo $this->Form->input('produto_id', array('class' => 'form-control'));
		echo $this->Form->input('descricao', array('class' => 'form-control'));
		echo $this->Form->input('ativo', array('options' => array('Sim' => 'Sim', 'Não' => 'Não'),'title' => 'Este campo serve para ativar/desativar a promoção. Se estiver desativada, não será possível visualiza-lá no site.', 'class' => 'form-control'));
	?>
	 </div>
                <?php echo $this->Form->button('Salvar', array('class' => 'btn btn-primary')); ?>
            </div>
        </div>
    </div>
</div>