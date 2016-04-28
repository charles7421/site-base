<div class="col-lg-12">
    <h2>Produtos/Serviços</h2>
    <br/>
    <button class="btn btn-primary" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'produtos', 'action' => 'add')); ?>'">
        <i class="fa fa-plus-square"></i> Adicionar novo Produto/Serviço
    </button>
    <hr/>
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Consulta de Produtos/Serviços</h5>
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
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('subtitulo'); ?></th>
			<th><?php //echo $this->Paginator->sort('imagem'); ?></th>
			<th><?php //echo $this->Paginator->sort('created'); ?></th>
			<th><?php //echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($produtos as $produto): ?>
	<tr>
		<td><?php echo h($produto['Produto']['id']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['nome']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['subtitulo']); ?>&nbsp;</td>
		<td><?php //echo h($produto['Produto']['imagem']); ?>&nbsp;</td>
		<td><?php //echo h($produto['Produto']['created']); ?>&nbsp;</td>
		<td><?php //echo h($produto['Produto']['modified']); ?>&nbsp;</td>
		<td class="actions">
                                <!--<button class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('action' => 'view', $produto['Produto']['id'])) ?>'">Visualizar</button>-->
                                <button class="btn btn-warning"  onclick="window.location.href='<?php echo Router::url(array('action' => 'edit', $produto['Produto']['id'])) ?>'">Editar</button>
                                <!--<a class="btn btn-success" title="Clique para abrir o Prospecto" target="_blank" href="<?php echo Router::url('../../files/' . $produto['Produto']['arquivo']) ?>"><i class="fa fa-file-text-o"></i></a>-->
                                <?php
                                echo $this->Form->postLink('Excluir', array('action' => 'delete', $produto['Produto']['id']), array('title' => 'Excluir', 'escape' => false, 'class' => 'btn btn-danger btn-outline', 'confirm' => array('Tem certeza que deseja deletar o Produto/Serviço: "' . $produto['Produto']['nome'] . '"?')));
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