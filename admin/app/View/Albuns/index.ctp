<div class="col-lg-12">
    <h2>Notícias / Álbuns</h2>
    <br/>
    <button class="btn btn-primary" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'Albuns', 'action' => 'add')); ?>'">
        <i class="fa fa-plus-square"></i> Adicionar nova notícia / álbum
    </button>
    <hr/>
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Consulta de Notícias / Álbuns</h5>
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
                        <th><?php echo $this->Paginator->sort('titulo'); ?></th>
                        <th><?php echo $this->Paginator->sort('tipo'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($albuns as $album): ?>
                        <tr>
                            <td ><?php echo h($album['Album']['id']); ?>&nbsp;</td>
                            <td style="width: 40%"><?php echo h($album['Album']['titulo']); ?>&nbsp;</td>
                            <td style="width: 20%"><?php echo h($album['Album']['tipo']); ?>&nbsp;</td>
                            <td class="actions">                                
                                <button class="btn btn-warning" 
                                        onclick="window.location.href='<?php echo Router::url(array('action' => 'edit', $album['Album']['id'])) ?>'">Editar</button>
                                <?php
                                echo $this->Form->postLink('Excluir', array('action' => 'delete', $album['Album']['id']), array('title' => 'Excluir', 'escape' => false, 'class' => 'btn btn-danger btn-outline', 'confirm' => array('Tem certeza que deseja deletar a notícia: "' . $album['Album']['titulo'] . '"?')));
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


