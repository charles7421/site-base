<div id="ProdutoIndividual">
    <div class="row">
        <div class="container">
            <div id="produto" class="col-md-12" >
                <div id="imagem" class="col-md-7">
                    <?php
                        echo $this->Html->imageAdmin('uploads/'. $produto['Produto']['caminho_capa'], array('class' => 'img-responsive', 'alt' => $produto['Produto']['nome'], 'title' => $produto['Produto']['nome'], 'style' => ''));
                    ?>
                </div>
                <div id="descricao" class="col-md-5">
                    <div class="col-md-12">
                        <div id="titulo">
                            <h3><?php echo $produto['Produto']['nome']; if ($produto['Produto']['categoria'] == "Usado") {echo " - Usado";}?></h3>
                            <h4><?php echo $produto['Produto']['subtitulo'] ?></h4>   
                        </div>
                        <div id="texto">
                            <p>
                                <?php echo $produto['Produto']['descricao'] ?>
                                <?php 
                                    if (!empty($produto['Produto']['link'])) {
                                        echo "<a target='_blank' href='" . $produto['Produto']['link'] . "'>Mais</a>";
                                    }                                    
                                ?>
                            </p>
                        </div>
                    </div> 
                    <div id="fotos">
                        <section class="col-md-12 text-center">
                            <?php 
                                if (!empty($produto['Produto']['arquivo'])) {
                                    echo "<a class='btn btn-success botao' title='Clique para abrir o prospecto deste produto.'' target='_blank' href='" . Router::url('../admin/files/' . $produto['Produto']['arquivo']). "'>Prospecto</a>";
                                }                                    
                            ?>  
                            <?php if (!empty($imagens)) { ?>
                            <hr>
                            <?php } ?>
                        </section>
                        <?php foreach ($imagens as $imagem) : ?>
                            <div class="col-md-4" >
                                <?php
                                echo $this->Html->link(
                                        $this->Html->imageAdmin('uploads/album/' . $imagem['Imagem']['produto_id'] . '/' . 'original_' . $imagem['Imagem']['url'], array('class' => 'img-responsive', 'alt' => $produto['Produto']['nome'])), '../admin/' . 'img/' . 'uploads/album/' . $imagem['Imagem']['produto_id'] . '/' . 'original_' . $imagem['Imagem']['url'], array('data-lightbox' => 'album', 'escapeTitle' => false, 'title' => $produto['Produto']['nome'])
                                );
                                ?>
                                    
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <hr>
                </div>
            </div>
        </div>    
    </div>
</div>
