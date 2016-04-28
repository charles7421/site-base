<div class="col-lg-12">
    <h2>Parceiros</h2>
    <br/>
    <button class="btn btn-primary" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'parceiros', 'action' => 'add')); ?>'">
        <i class="fa fa-plus-square"></i> Adicionar novo Parceiro
    </button>
    <hr/>
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Consulta de Parceiros</h5>
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
                        <th><?php echo $this->Paginator->sort('logo'); ?></th>
                        <th><?php echo $this->Paginator->sort('link'); ?></th>
<!--                        <th><?php echo $this->Paginator->sort('created'); ?></th>
                        <th><?php echo $this->Paginator->sort('modified'); ?></th>-->
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($parceiros as $parceiro): ?>
                        <tr>
                            <td><?php echo h($parceiro['Parceiro']['id']); ?>&nbsp;</td>
                            <td><?php echo h($parceiro['Parceiro']['nome']); ?>&nbsp;</td>
                            <td><?php echo h($parceiro['Parceiro']['logo']); ?>&nbsp;</td>
                            <td><?php echo h($parceiro['Parceiro']['link']); ?>&nbsp;</td>
                            <td><?php // echo h($parceiro['Parceiro']['created']);  ?>&nbsp;</td>
                            <td><?php // echo h($parceiro['Parceiro']['modified']);  ?>&nbsp;</td>
                            <td class="actions">
                                <!--<button class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('action' => 'view', $parceiro['Parceiro']['id'])) ?>'">Visualizar</button>-->
                                <button class="btn btn-warning"  onclick="window.location.href='<?php echo Router::url(array('action' => 'edit', $parceiro['Parceiro']['id'])) ?>'">Editar</button>
                                <?php
                                echo $this->Form->postLink('Excluir', array('action' => 'delete', $parceiro['Parceiro']['id']), array('title' => 'Excluir', 'escape' => false, 'class' => 'btn btn-danger btn-outline', 'confirm' => array('Tem certeza que deseja deletar o Parceiro: "' . $parceiro['Parceiro']['nome'] . '"?')));
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