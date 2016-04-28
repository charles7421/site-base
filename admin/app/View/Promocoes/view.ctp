<div class="promocoes view">
<h2><?php echo __('Promocao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($promocao['Promocao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($promocao['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $promocao['Produto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($promocao['Promocao']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inativo'); ?></dt>
		<dd>
			<?php echo h($promocao['Promocao']['inativo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($promocao['Promocao']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($promocao['Promocao']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Promocao'), array('action' => 'edit', $promocao['Promocao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Promocao'), array('action' => 'delete', $promocao['Promocao']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $promocao['Promocao']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Promocoes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promocao'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
