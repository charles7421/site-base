<div class="col-lg-12">
    <h2>Promoção</h2>
    <br/>
    <button class="btn btn-primary" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'promocoes', 'action' => 'add')); ?>'">
        <i class="fa fa-plus-square"></i> Adicionar nova Promoção
    </button>
    <hr/>
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Consulta de Promoções</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>

        <div class="ibox-content">
            <table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
                <thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('ativo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php //echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($promocoes as $promocao): ?>
	<tr>
		<td><?php echo h($promocao['Promocao']['id']); ?>&nbsp;</td>
		<td><?php echo h($promocao['Produto']['nome']); ?>&nbsp;</td>
		<td><?php echo h($promocao['Promocao']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($promocao['Promocao']['ativo']); ?>&nbsp;</td>
		<td><?php echo h($promocao['Promocao']['created']); ?>&nbsp;</td>
		<td><?php //echo h($promocao['Promocao']['modified']); ?>&nbsp;</td>
		<td class="actions">
                                <!--<button class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('action' => 'view', $promocao['Promocao']['id'])) ?>'">Visualizar</button>-->
                                <button class="btn btn-warning"  onclick="window.location.href='<?php echo Router::url(array('action' => 'edit', $promocao['Promocao']['id'])) ?>'">Editar</button>
                                <?php
                                echo $this->Form->postLink('Excluir', array('action' => 'delete', $promocao['Promocao']['id']), array('title' => 'Excluir', 'escape' => false, 'class' => 'btn btn-danger btn-outline', 'confirm' => array('Tem certeza que deseja deletar o Album: "' . $promocao['Promocao']['id'] . '"?')));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php echo $this->element('paginacao'); ?>
        </div>
    </div>
</div>