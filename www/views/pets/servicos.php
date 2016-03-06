

<div class="container">
	<div class="text-center">
		<h2><?php echo $pagina['subtitulo'] ?></h2>
		<div><?php echo $pagina['texto'] ?></div>
	</div>

	<div class="row">
		<?php foreach ($servicos as $servico): ?>
		<div class="col-xs-12 col-md-6">
			<h3><?php echo $servico['nome'] ?></h3>
			<div><?php echo $servico['descricao'] ?></div>
			<a href="servicos/<?php echo $servico['nome'] ?>" class="pull-right">saiba mais</a>
		</div>
		<?php endforeach ?>
	</div>
</div>

