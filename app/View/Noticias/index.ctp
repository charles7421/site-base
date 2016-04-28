<div id="noticias">
    <div class="row">
        <div class="col-md-12">
            <div class="topo text-center">
            <h2>Eventos, Notícias e Dicas</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
        <?php foreach ($albuns as $album): ?>
            <div class="col-md-10 col-md-offset-1" style="padding-left: 25px;">
                <div id="conteudo" class="row">
                    <div class="col-md-6 text-center">
                        <a href="<?php echo $this->Html->url(array('controller' => 'Noticias', 'action' => 'ver', $album['Album']['slug'])); ?>" title="<?php echo $album['Album']['titulo'] ?>" class="text-center">
                            <?php echo $this->Html->imageAdmin('uploads/' . $album['Album']['caminho_capa'], array('alt' => $album['Album']['slug'], 'class' => 'img-responsive')) ?>
                        </a>
                    </div>
                    <div id="texto" class="col-md-6">
                        <span><?php echo $this->Data->converterData($album['Album']['data'])?></span>
                        <h3><?php echo $album['Album']['titulo'] ?></h3>
                        <p><?php echo substr($album['Album']['descricao'],0,150) ?></p>
                        <br>
                        <a class="btn btn-primary botao" href="<?php echo $this->Html->url(array('controller' => 'Noticias', 'action' => 'ver', $album['Album']['slug'])); ?>">Leia mais</a>

                    </div>
                </div>
                <hr class="hr" />
            </div>
        <?php endforeach; ?>
        </div>    
    </div>
</div>
