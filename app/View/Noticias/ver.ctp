<div id="ver-noticia">
    <div class="row">
        <div class="col-md-12">
            <div class="topo text-center">
                <h2>Eventos, Notícias e Dicas</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div id="conteudo" class="col-md-12" >
                <div id="fotos" class="col-md-6">
                    <div id="capa" class="col-md-12">
                        <?php
                        echo $this->Html->imageAdmin('uploads/' . $album['Album']['caminho_capa'], array('class' => 'img-responsive', 'alt' => $album['Album']['slug'], 'style' => ''));
                        ?>
                    </div>
                    <div id="divisor" class="col-md-12 text-center">
                        <?php if (!empty($imagens)) { ?>
                        <hr>
                        <?php } ?>
                    </div>
                    <div id="imagens" class="col-md-12">
                    <?php foreach ($imagens as $imagem) : ?>
                        <div class="col-md-2" >
                            <?php
                            echo $this->Html->link(
                                $this->Html->imageAdmin('uploads/album/' . $imagem['Imagem']['albun_id'] . '/' . 'original_' . $imagem['Imagem']['url'], array('class' => 'img-responsive', 'alt' => $imagem['Albun']['slug'])), '../admin/' . 'img/' . 'uploads/album/' . $imagem['Imagem']['albun_id'] . '/' . 'original_' . $imagem['Imagem']['url'], array('data-lightbox' => 'album', 'escapeTitle' => false, 'title' => $album['Album']['titulo'])
                                );
                                ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div id="descricao" class="col-md-6">
                    <div class="col-md-12">
                        <div id="titulo">
                            <span><?php echo $this->Data->converterData($album['Album']['data']);?></span>
                            <h3><?php echo $album['Album']['titulo'];?></h3>
                        </div>
                        <div id="texto">
                            <p>
                                <p><?php echo $album['Album']['descricao'] ?></p>
                            </p>
                        </div>
                    </div> 
                </div>
                <div class="col-md-12 text-center">
                    <hr>
                </div>
            </div>
        </div>    
    </div>
</div>
