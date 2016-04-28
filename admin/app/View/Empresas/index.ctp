<div class="col-lg-12">
    <h2>Empresa</h2>
    <br/>
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Consulta de Perfil da Empresa</h5>
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
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php //echo $this->Paginator->sort('created'); ?></th>
			<th><?php //echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($empresas as $empresa): ?>
	<tr>
		<td><?php echo h($empresa['Empresa']['id']); ?>&nbsp;</td>
		<td width="30%"><?php echo h($empresa['Empresa']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['email']); ?>&nbsp;</td>
		<td><?php //echo h($empresa['Empresa']['created']); ?>&nbsp;</td>
		<td><?php //echo h($empresa['Empresa']['modified']); ?>&nbsp;</td>
		<td class="actions">
                                <!--<button class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('action' => 'view', $empresa['Empresa']['id'])) ?>'">Visualizar</button>-->
                                <button class="btn btn-warning"  onclick="window.location.href='<?php echo Router::url(array('action' => 'edit', $empresa['Empresa']['id'])) ?>'">Editar</button>
                                <?php
                                echo $this->Form->postLink('Excluir', array('action' => 'delete', $empresa['Empresa']['id']), array('title' => 'Excluir', 'escape' => false, 'class' => 'btn btn-danger btn-outline', 'confirm' => array('Tem certeza que deseja deletar o Parceiro: "' . $empresa['Empresa']['id'] . '"?')));
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
