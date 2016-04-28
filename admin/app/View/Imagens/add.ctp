<div class="imagens form">
<?php echo $this->Form->create('Imagem'); ?>
	<fieldset>
		<legend><?php echo __('Add Imagem'); ?></legend>
	<?php
		echo $this->Form->input('url');
		echo $this->Form->input('descricao');
		echo $this->Form->input('albun_id');
		echo $this->Form->input('produto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Imagens'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Albuns'), array('controller' => 'albuns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albun'), array('controller' => 'albuns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
