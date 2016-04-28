<div class="imagens index">
	<h2><?php echo __('Imagens'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('albun_id'); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($imagens as $imagem): ?>
	<tr>
		<td><?php echo h($imagem['Imagem']['id']); ?>&nbsp;</td>
		<td><?php echo h($imagem['Imagem']['url']); ?>&nbsp;</td>
		<td><?php echo h($imagem['Imagem']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($imagem['Albun']['id'], array('controller' => 'albuns', 'action' => 'view', $imagem['Albun']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($imagem['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $imagem['Produto']['id'])); ?>
		</td>
		<td><?php echo h($imagem['Imagem']['created']); ?>&nbsp;</td>
		<td><?php echo h($imagem['Imagem']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $imagem['Imagem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $imagem['Imagem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $imagem['Imagem']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $imagem['Imagem']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Imagem'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Albuns'), array('controller' => 'albuns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albun'), array('controller' => 'albuns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
