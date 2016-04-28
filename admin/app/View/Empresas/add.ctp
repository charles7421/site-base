<div class="row">
    <div class="col-lg-12">
        <div class="">
            <div class="ibox float-e-margins">
                <div class="ibox-content"> 
                    <?php echo $this->Form->create('Empresa'); ?>
                    <h2>Adicionar novo Perfil de Empresa</h2>
                    <div class="hr-line-dashed"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $this->Form->input('descricao', array('label' => 'Fale sobre a empresa', 'class' => 'form-control')); ?>                    
                        </div>  

                        <div class="col-md-4">
                            <?php echo $this->Form->input('missao', array('label' => 'Missão', 'class' => 'form-control')); ?>        
                        </div>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('visao', array('label' => 'Visão', 'class' => 'form-control')); ?>        
                        </div>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('valores', array('class' => 'form-control')); ?>        
                        </div>

                        <div class="col-md-4">
                            <?php echo $this->Form->input('facebook', array('class' => 'form-control')); ?>        
                        </div>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('plus', array('label' => 'Google Plus', 'class' => 'form-control')); ?>        
                        </div>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('twitter', array('class' => 'form-control')); ?>        
                        </div>

                        <div class="col-md-4">
                            <?php echo $this->Form->input('telefone', array('class' => 'form-control')); ?>        
                        </div>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('whatsapp', array('label' => 'WhatsApp', 'class' => 'form-control')); ?>        
                        </div>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('email', array('class' => 'form-control')); ?>        
                        </div>

                        <div class="col-md-12">
                            <?php echo $this->Form->input('endereco', array('label' => 'Endereço', 'class' => 'form-control')); ?>        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $this->Form->button('Salvar', array('class' => 'btn btn-primary')); ?>    
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

