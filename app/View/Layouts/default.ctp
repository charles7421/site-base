<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex, nofollow">
        <meta name="description" content="A melhor e maior linha de Máquinas Agrícolas do Brasil, aqui na Futura Máquinas Agrícolas!">
        <meta name="keywords" 
              content="Máquinas Agrícolas, Patos de Minas, Futura Máquinas Agrícolas, Stara, Laboratório de Tecnologia, Minas Gerais">
        <meta name="author" content="UX Soluções em TI | www.uxsolucoes.com.br">
        <link rel="canonical" href="http://futuramaquinas.com/" />
        <meta name="reply-to" content="contato@futuramaquinas.com">
        <title>Futura Máquinas Agrícolas - Patos de Minas / MG | <?php echo $this->fetch('title'); ?></title>
        <link href="<?php echo $this->webroot . 'app' . '/' . WEBROOT_DIR . '/img/favicon.png' ?>" type="image/x-icon" rel="shortcut icon">
        <link href="<?php echo $this->webroot . 'app' . '/' . WEBROOT_DIR . '/img/favicon.png' ?>" type="image/x-icon" rel="icon">

        <?php
        echo $this->Html->css('estilo') . $this->Html->css('bootstrap.min') . "\n" .
        $this->Html->script('jquery.min') . "\n" . $this->Html->css('owl.theme') . "\n" . $this->Html->css('owl.carousel'). "\n" . $this->Html->css('fontes')."\n" . $this->Html->css('themify-icons')."\n".$this->Html->css('lightbox');
        ?>
    </head>
    <body>
        <section id="site">
            <section id="msgs"><?php echo $this->Session->flash(); ?></section>
            <section id="conteudo">
                <?php echo $this->element('cabecalho'); ?>
                <?php echo $this->fetch('content'); ?>
            </section>
            <section id="rodape">
                <?php echo $this->element('rodape'); ?>
            </section>
        </section>
        <section id="js">
            <?php
            echo
            $this->Html->script('bootstrap.min')
            . "\n" .
            $this->Html->script('app')
            . "\n" .
            $this->Html->script('owl.carousel.min')
            . "\n" .
            $this->Html->script('lightbox.min');
            ?>
        </section>

    </body>
</html>
