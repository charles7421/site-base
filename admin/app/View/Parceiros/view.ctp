<div class="parceiros view">
<h2><?php echo __('Parceiro'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($parceiro['Parceiro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo h($parceiro['Parceiro']['logo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($parceiro['Parceiro']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($parceiro['Parceiro']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($parceiro['Parceiro']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parceiro'), array('action' => 'edit', $parceiro['Parceiro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Parceiro'), array('action' => 'delete', $parceiro['Parceiro']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $parceiro['Parceiro']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Parceiros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parceiro'), array('action' => 'add')); ?> </li>
	</ul>
</div>
