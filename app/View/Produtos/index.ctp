<div id="destaques" class="novos">
    <div class="row">
        <div class="col-md-12">
            <div class="topo text-center">
                <h2>Novos</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div id="produtos" class="col-md-12">
                <?php $posicao = 0; foreach ($produtos as $produto) :  ?>
                    <div id="div-destaques" class="col-md-4">
                        <a href="<?php echo $this->Html->url(array('controller' => 'Produtos', 'action' => 'p', $produto['Produto']['slug'])); ?>" 
                           title="<?php echo $produto['Produto']['nome']?>" alt="<?php echo $produto['Produto']['nome']?>">
                            <div class="quadro" 
                                 style="background: url('<?php echo 'admin/'.Configure::read('App.imageBaseUrl') . 'uploads/'. $produto['Produto']['caminho_capa']?>') 90% -50px;">
                                <div class="<?php if ($posicao == 1) { echo 'bg-verde'; } else { echo 'bg-laranja';} ?> ">
                                    <h3><?php echo $produto['Produto']['nome'] ?></h3>
                                    <h4><?php echo $produto['Produto']['subtitulo'] ?></h4>    
                                </div>                    
                            </div>
                        </a>
                    </div>
                <?php $posicao++; endforeach; ?>
            </div>
        </div>    
    </div>
</div>


