<div id="contato">
    <div class="row">
        <div class="col-md-12">
            <div class="topo-laranja text-center">
                <h2>Fale Conosco</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="">
            <div id="conteudo" class="col-md-12">
                <p>
                    Entre em contato conosco. Respondemos em até 24hrs.
                </p>
                <div style="display:none" class="col-md-12">
                    <iframe width="100%" height="300" frameborder="0" style="border:0; margin: -5px;"
                            src="Link Google Maps Embed"></iframe>
                </div>
                <div class="col-md-12">
                    <?php echo $this->form->create('Contato', array('controller' => 'FaleConosco', 'action' => 'send'))?>                
                    <fieldset>
                        <div class="">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="field-group">
                                    <label class="sr" for="txtNome">Nome</label>
                                    <input name="txtNome" class="form-control" id="txtNome" type="text" placeholder="">
                                </div>    
                            </div>                            
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="field-group">
                                <label class="sr" for="txtEmail">E-mail</label>
                                <input name="txtEmail" class="form-control" id="txtEmail" type="email" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2" style="margin-bottom: 40px;">
                            <div class="field-group">
                                <label class="sr" for="txtAssunto">Assunto</label>
                                <input name="txtAssunto" class="form-control" id="txtAssunto" type="text" placeholder="">
                            </div>
                            <div class="field-group">
                                <label for="txtMensagem" class="sr">Mensagem</label>
                                <textarea placeholder="" class="form-control" name="txtMensagem" id="txtMensagem" cols="30" rows="7"></textarea>
                            </div>
                            <div class="text-right">
                                <br>
                                <input type="submit" class="btn btn-primary botao " value="Enviar">
                            </div>                        
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>    
    </div>
</div>
