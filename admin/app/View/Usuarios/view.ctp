<div class="related">
    <div class="actions">
        <button class="btn btn-primary" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'noticias', 'action' => 'add')); ?>'">
            <i class="fa fa-plus-square"></i> Adicionar nova notícia
        </button>
    </div>
    <br/>
    <h3><?php echo __('Comentários relacionados'); ?></h3>
    <?php if (!empty($usuario['Comentario'])): ?>
        <table cellpadding = "0" cellspacing = "0" class="table table-striped table-hover">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Comentario'); ?></th>
                <th><?php echo __('Noticia Id'); ?></th>
                <th><?php echo __('Usuario Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($usuario['Comentario'] as $comentario): ?>
                <tr>
                    <td><?php echo $comentario['id']; ?></td>
                    <td><?php echo $comentario['comentario']; ?></td>
                    <td><?php echo $comentario['noticia_id']; ?></td>
                    <td><?php echo $comentario['usuario_id']; ?></td>
                    <td><?php echo $comentario['created']; ?></td>
                    <td><?php echo $comentario['modified']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), array('confirm' => __('Are you sure you want to delete # %s?', $comentario['id']))); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<div class="related">
    <h3><?php echo __('Notícias relacionad'); ?></h3>
    <?php if (!empty($usuario['Noticia'])): ?>
        <table cellpadding = "0" cellspacing = "0" class="table table-striped table-hover">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Categoria Id'); ?></th>
                <th><?php echo __('Titulo'); ?></th>
                <th><?php echo __('Corpo'); ?></th>
                <th><?php echo __('Usuario Id'); ?></th>
                <th><?php echo __('Data'); ?></th>
                <th><?php echo __('Acessos'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($usuario['Noticia'] as $noticia): ?>
                <tr>
                    <td><?php echo $noticia['id']; ?></td>
                    <td><?php echo $noticia['categoria_id']; ?></td>
                    <td><?php echo $noticia['titulo']; ?></td>
                    <td><?php echo $noticia['corpo']; ?></td>
                    <td><?php echo $noticia['usuario_id']; ?></td>
                    <td><?php echo $noticia['data']; ?></td>
                    <td><?php echo $noticia['acessos']; ?></td>
                    <td><?php echo $noticia['created']; ?></td>
                    <td><?php echo $noticia['modified']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'noticias', 'action' => 'view', $noticia['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'noticias', 'action' => 'edit', $noticia['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'noticias', 'action' => 'delete', $noticia['id']), array('confirm' => __('Are you sure you want to delete # %s?', $noticia['id']))); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
