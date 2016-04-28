<div id="resultados">
	<div class="row">
		<div class="col-md-12">
			<div class="topo text-center">
				<h2>Resultado da Busca</h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div id="sem-resultados" class="col-md-12 box" style="display: <?php if ($totalProdutos == 0 and $totalNoticias == 0) { echo '';} else {echo 'none';}?>">
				<h3 class="text-center">Não foram encontrados resultados para a pesquisa: <span><?php echo $pesquisa?></span></h3>
			</div>
			<div id="produtos" class="col-md-12 box" style="display: <?php if ($totalProdutos == 0) { echo 'none';} else {echo '';}?>">
				<h3><?php echo $totalProdutos ?> resultados para: <span><?php echo $pesquisa?></span> em Produtos e Serviços.</h3>	
				<hr style="border-style: dotted"> 	
				<?php foreach ($produtos as $produto): ?>
					<div id="item">
						<span class="label label-danger"><?php echo $produto['Produto']['tipo']?></span>
						<a href="<?php echo $this->Html->url(array('controller' => 'Produtos', 'action' => 'p', $produto['Produto']['slug'])); ?>">
							<h4><?php echo $produto['Produto']['nome']?></h4>
							<span><?php echo $_SERVER['HTTP_HOST'].$this->Html->url(array('controller' => 'Produtos', 'action' => 'p', $produto['Produto']['slug'])); ?></span> 
						</a>
						   
						<p><?php echo $produto['Produto']['descricao']?></p> 
						<hr style="border-style: dotted"> 
					</div>					
				<?php endforeach ?>			
			</div>
			<div id="noticias" class="col-md-12 box" style="display: <?php if ($totalNoticias == 0) { echo 'none';} else {echo '';}?>">
				<h3><?php echo $totalNoticias ?> resultados para: <span><?php echo $pesquisa?></span> em Notícias e Eventos.</h3>	
				<hr style="border-style: dotted"> 	
				<?php foreach ($noticias as $noticia): ?>
					<div id="item">
						<span class="label label-danger"><?php echo $this->Data->converterData($noticia['Album']['data'])?></span>
						<a href="<?php echo $this->Html->url(array('controller' => 'Noticias', 'action' => 'ver', $noticia['Album']['slug'])); ?>">
							<h4><?php echo $noticia['Album']['titulo'] ?></h4>
							<span><?php echo $_SERVER['HTTP_HOST'].$this->Html->url(array('controller' => 'Noticias', 'action' => 'ver', $noticia['Album']['slug'])); ?></span> 
						</a>
						   
						<p><?php echo $noticia['Album']['descricao'] ?></p> 
						<hr style="border-style: dotted"> 
					</div>					
				<?php endforeach ?>
			</div>
		</div>    
	</div>
</div>


