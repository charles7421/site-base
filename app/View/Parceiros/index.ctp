<div id="parceiros">
    <div class="row">
        <div class="col-md-12">
            <div class="topo text-center">
                <h2>Parceiros</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-md-12" style="padding-left: 25px;">
                <?php $posicao = 0; foreach ($parceiros as $parceiro) :  ?>
                    <div id="item" class="col-md-4 text-center">
                        <a href="<?php echo $parceiro['Parceiro']['link']; ?>" title="<?php echo $parceiro['Parceiro']['nome']?>" alt="<?php echo $parceiro['Parceiro']['nome']?>">
                        <?php
                            echo $this->Html->imageAdmin('uploads/parceiros/'. $parceiro['Parceiro']['logo'], array('class' => 'img-responsive', 'alt' => $parceiro['Parceiro']['nome'], 'title' => $parceiro['Parceiro']['nome'], 'style' => ''));
                        ?>
                        </a>
                    </div>
                <?php $posicao++; endforeach; ?>
            </div>
        </div>    
    </div>
</div>



