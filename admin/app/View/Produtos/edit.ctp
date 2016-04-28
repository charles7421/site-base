<div class="row">
    <div class="col-lg-12">
        <div class="">
            <div class="ibox float-e-margins">
                <div class="ibox-content"> 
                    <?php echo $this->Form->create('Produto', array('type' => 'file')); ?>
                    <h2>Editar Produto/Serviço</h2>
                    <div class="hr-line-dashed"></div>
                    <div class="row">
                        <?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('nome', array('class' => 'form-control')); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('subtitulo', array('class' => 'form-control', 'maxLength' => '42')); ?>
                        </div>
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('tipo', array('options' => array('Produto' => 'Produto', 'Serviço' => 'Serviço', 'Peça' => 'Peça'), 'empty' => 'Escolha um tipo', 'title' => 'O tipo determina em qual tela o Produto/Peça ou Serviço deverá sair. Selecione um deles.', 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('categoria', array('options' => array('Novo' => 'Novo', 'Usado' => 'Usado') ,'empty' => 'Escolha uma categoria', 'title' => 'A Categoria determina em qual estado o Produto/Peça se econtra. Selecione um deles.', 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('link', array('class' => 'form-control')); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('descricao', array('class' => 'form-control')); ?>
                        </div>
                        <div class="col-md-4">
                            <?php
                            echo '<label>' . 'Prospecto. Recomendado:(*.PDF)' . '</label>';
                        echo $this->Form->file('uploadArquivo', array('accept' => 'file_extension|media_type'));
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?php
                            echo '<label>' . 'Capa do Produto' . '</label>';
                            echo $this->Form->file('uploadcapa', array('title' => 'Capa do Produto. Somente uma imagem por vez'));
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?php
                            echo '<label>' . 'Mais imagens' . '</label>';
                            echo $this->Form->file('uploadfile.', array('multiple', 'title' => 'Imagens do Produto. Selecione várias imagens de uma só vez.', 'required' => 'false'));
                            ?>
                        </div>                   
                        <div class="">
                            <div class="col-md-12">
                            <hr>
                                <?php echo $this->Form->button('Salvar', array('class' => 'btn btn-primary')); ?>
                            </div>    
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
