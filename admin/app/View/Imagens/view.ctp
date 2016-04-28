<div class="imagens view">
<h2><?php echo __('Imagem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imagem['Imagem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($imagem['Imagem']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($imagem['Imagem']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Albun'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagem['Albun']['id'], array('controller' => 'albuns', 'action' => 'view', $imagem['Albun']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagem['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $imagem['Produto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($imagem['Imagem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($imagem['Imagem']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Imagem'), array('action' => 'edit', $imagem['Imagem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Imagem'), array('action' => 'delete', $imagem['Imagem']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $imagem['Imagem']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Imagens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imagem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albuns'), array('controller' => 'albuns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albun'), array('controller' => 'albuns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
