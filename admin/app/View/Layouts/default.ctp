<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php echo $this->app->nomeVersao ?> | <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon')
        . "\n"
        . $this->Html->css('bootstrap')
        . "\n"
        . $this->Html->css('mdb')
        . "\n"
        . $this->Html->css('font-awesome/css/font-awesome.css')
        . "\n"
        . $this->Html->css('animate')
        . "\n"
        . $this->Html->css('style.css')
        . "\n"
        . $this->Html->script('jquery-2.1.1')
        . $this->Html->script('jquery-ui-1.10.4.min')
        . $this->Html->script('nicedit')
        . $this->fetch('meta')
        . $this->fetch('css')
        . $this->fetch('script')
        ?>
    </head>

    <body class="<?php
        if (!$this->Session->read('Auth.User.nome')) : echo 'gray-bg';
        else : echo 'skin-1';
        endif;
        ?>">
        <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
        <div id="wrapper">
            <?php if ($this->Session->read('Auth.User.nome')) : ?>
                <nav class="navbar-default navbar-static-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="nav-header">
                                <div class="dropdown profile-element"> 
                                    <span>
                                        <?php echo $this->Html->image('logo_admin_menor.png', array('alt' => 'Gaúcha Alimentação')) ?>
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo $this->Html->url(array('controller' => 'usuarios', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?>">
                                            <span class="clear">
                                                <span class="block m-t-xs"> 
                                                    <strong class="font-bold"><?php echo $this->Session->read('Auth.User.login') ?></strong>
                                                </span>
                                                <span class="text-muted text-xs block">
                                                    <?php echo $this->Session->read('Auth.User.nome') ?>                                                
                                                </span> 
                                            </span> 
                                        </a>
                                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                            <li>
                                                <a href="<?php $this->Html->link('Sair', array('controller' => 'usuarios', 'action' => 'logout')); ?>"></a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="logo-element">
                                    <?php echo $this->app->nomeVersao ?>
                                </div>
                            </li>
                            <li class="active">
                                <a href="<?php echo $this->Html->url(array('controller' => 'albuns', 'action' => 'add')); ?>">
                                    <?php echo $this->Html->tag('i', '', array('class' => 'fa fa-plus-square')) . $this->Html->tag('span', 'Nova notícia', array('class' => 'nav-label')) ?>
                                </a>
                            </li>
                            <li >
                                <a href="<?php echo $this->Html->url(array('controller' => 'albuns', 'action' => 'index')); ?>">
                                    <?php echo $this->Html->tag('i', '', array('class' => 'fa fa-newspaper-o')) . $this->Html->tag('span', 'Notícias / Álbuns', array('class' => 'nav-label')) ?>
                                </a>
                            </li>
                            <!--                            <li>
                                                            <a href="<?php echo $this->Html->url(array('controller' => 'comentarios', 'action' => 'index')); ?>">
                            <?php echo $this->Html->tag('i', '', array('class' => 'fa fa-comments')) . $this->Html->tag('span', 'Comentários', array('class' => 'nav-label')) ?>
                                                            </a>
                                                        </li>-->
<!--                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'categorias', 'action' => 'index')); ?>">
                                    <?php echo $this->Html->tag('i', '', array('class' => 'fa fa-book')) . $this->Html->tag('span', 'Categorias', array('class' => 'nav-label')) ?>
                                </a>
                            </li>-->
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'produtos', 'action' => 'index')); ?>">
                                    <?php echo $this->Html->tag('i', '', array('class' => 'fa fa-bullhorn')) . $this->Html->tag('span', 'Produtos/Serviços', array('class' => 'nav-label')) ?>
                                </a>
                            </li>
<!--                            <li>
                                <a href="#">
                                    <?php echo $this->Html->tag('i', '', array('class' => 'fa fa-file-text-o')) . $this->Html->tag('span', 'Currículos', array('class' => 'nav-label')) ?>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li><a href="<?php echo $this->Html->url(array('controller' => 'curriculos', 'action' => 'index')); ?>">Listar Currículos</a></li>
                                    <li>
                                        <a href="#">Vagas<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="<?php echo $this->Html->url(array('controller' => 'vagas', 'action' => 'index')); ?>">Listar todos</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $this->Html->url(array('controller' => 'vagas', 'action' => 'add')); ?>">Nova Vaga</a>
                                            </li>                                          
                                        </ul>
                                    </li>
                                </ul>
                            </li>-->
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'usuarios', 'action' => 'index')); ?>">
                                    <?php echo $this->Html->tag('i', '', array('class' => 'fa fa-users')) . $this->Html->tag('span', 'Usuários', array('class' => 'nav-label')) ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'parceiros', 'action' => 'index')); ?>">
                                    <?php echo $this->Html->tag('i', '', array('class' => 'fa fa-smile-o')) . $this->Html->tag('span', 'Parceiros', array('class' => 'nav-label')) ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'promocoes', 'action' => 'index')); ?>">
                                    <?php echo $this->Html->tag('i', '', array('class' => 'fa fa-diamond')) . $this->Html->tag('span', 'Promoções', array('class' => 'nav-label')) ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'empresas', 'action' => 'index')); ?>">
                                    <?php echo $this->Html->tag('i', '', array('class' => 'fa fa-home')) . $this->Html->tag('span', 'Empresa', array('class' => 'nav-label')) ?>
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>


                <div id="page-wrapper" class="gray-bg">
                    <div class="row">
                        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                            <div class="navbar-header">
                                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                            </div>
                            <ul class="nav navbar-top-links navbar-right">
                                <li>
                                    <span class="m-r-sm text-muted welcome-message"><?php echo date("d/m/Y"); ?></span>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'usuarios', 'action' => 'logout')) ?>">
                                        <?php echo $this->Html->tag('i', '', array('class' => 'fa fa-sign-out')) . $this->Html->tag('span', 'Sair', array('class' => 'nav-label')) ?>
                                    </a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo $this->Session->flash(); ?>
                                <?php echo $this->fetch('content'); ?>
                                <?php echo $this->element('sql_dump'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="footer fixed">
                        <div class="pull-right">
                            <strong><a href="http://www.uxsolucoes.com.br" target="_blank"><?php echo $this->Html->image('Icone.png') ?></a> </strong>&copy; 2015
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <?php echo $this->fetch('content'); ?>
            <?php endif; ?>
        </div>
        <?php
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('jquery-2.1.1');
        echo $this->Html->script('jquery-ui-1.10.4.min');
        echo $this->Html->script('plugins/metisMenu/jquery.metisMenu');
        echo $this->Html->script('plugins/slimscroll/jquery.slimscroll.min');
        echo $this->Html->script('plugins/metisMenu/jquery.metisMenu');
        echo $this->Html->script('plugins/summernote/summernote.min');
        echo $this->Html->script('inspinia');
        echo $this->Html->script('plugins/pace/pace.min');
        ?>
    </body>
</html>
