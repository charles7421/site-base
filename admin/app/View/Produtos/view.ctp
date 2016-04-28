<div class="produtos view">
<h2><?php echo __('Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produto'), array('action' => 'edit', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produto'), array('action' => 'delete', $produto['Produto']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $produto['Produto']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imagens'), array('controller' => 'imagens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imagem'), array('controller' => 'imagens', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Promocoes'), array('controller' => 'promocoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promocao'), array('controller' => 'promocoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Imagens'); ?></h3>
	<?php if (!empty($produto['Imagem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Albun Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produto['Imagem'] as $imagem): ?>
		<tr>
			<td><?php echo $imagem['id']; ?></td>
			<td><?php echo $imagem['url']; ?></td>
			<td><?php echo $imagem['descricao']; ?></td>
			<td><?php echo $imagem['albun_id']; ?></td>
			<td><?php echo $imagem['produto_id']; ?></td>
			<td><?php echo $imagem['created']; ?></td>
			<td><?php echo $imagem['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'imagens', 'action' => 'view', $imagem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'imagens', 'action' => 'edit', $imagem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'imagens', 'action' => 'delete', $imagem['id']), array('confirm' => __('Are you sure you want to delete # %s?', $imagem['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Imagem'), array('controller' => 'imagens', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Promocoes'); ?></h3>
	<?php if (!empty($produto['Promocao'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Inativo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produto['Promocao'] as $promocao): ?>
		<tr>
			<td><?php echo $promocao['id']; ?></td>
			<td><?php echo $promocao['produto_id']; ?></td>
			<td><?php echo $promocao['descricao']; ?></td>
			<td><?php echo $promocao['inativo']; ?></td>
			<td><?php echo $promocao['created']; ?></td>
			<td><?php echo $promocao['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'promocoes', 'action' => 'view', $promocao['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'promocoes', 'action' => 'edit', $promocao['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'promocoes', 'action' => 'delete', $promocao['id']), array('confirm' => __('Are you sure you want to delete # %s?', $promocao['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Promocao'), array('controller' => 'promocoes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
