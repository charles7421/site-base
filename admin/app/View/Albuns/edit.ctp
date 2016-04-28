<div class="row">
    <div class="col-lg-12">
        <div class="">
            <div class="ibox float-e-margins">
                <div class="ibox-content">                        
                    <?php echo $this->Form->create('Album', array('type' => 'file')); ?>
                    <h2>Adicionar novo notícia</h2>
                    <div class="hr-line-dashed"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $this->Form->input('id', array('class' => 'form-control')) ?>
                            <div class="form-group">
                                <?php echo $this->Form->input('titulo', array('class' => 'form-control', 'title' => 'Este título é a referência do conteudo das fotos que este album contem. Não deixe-o em branco.')); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php
                                echo '<label>' . 'Data para visualização' . '</label>';
                                echo $this->Form->date('data', array('class' => 'form-control'))
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo $this->Form->input('descricao', array('label' => 'Corpo da Notícia', 'class' => 'form-control', 'title' => 'Pequena descrição sobre o conteúdo deste album de imagens. Ex: Local, data ou qualquer informação relevante.')); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <?php
                                echo $this->Form->input('tipo', array('options' => array('Notícias' => 'Notícias', 'Empresa' => 'Empresa'), 'empty' => 'Escolha um tipo', 'title' => 'O tipo determina em qual tela a notícia ou imagens deverá sair. Selecione um deles.', 'class' => 'form-control'));
                                ?>
                            </div>
                            <div class="col-md-4">
                                <?php
                                echo '<label>' . 'Capa da Notícia' . '</label>';
                                echo $this->Form->file('uploadcapa', array('title' => 'Capa da Notícia. Somente uma imagem por vez'));
                                ?>
                            </div>
                            <div class="col-md-4">
                                <?php
                                echo '<label>' . 'Imagens da Notícia' . '</label>';
                                echo $this->Form->file('uploadfile.', array('multiple', 'title' => 'Imagens da Notícia. Selecione várias imagens de uma só vez.', 'required' => 'false'));
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr/>
                            <?php echo $this->Form->button('Salvar', array('class' => 'btn btn-primary')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
