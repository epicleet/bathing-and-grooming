

<div class="container">
	<div class="text-center">
		<h2><?php echo $pagina['subtitulo'] ?></h2>
		<div><?php echo $pagina['texto'] ?></div>
	</div>

	<div class="row">
		<?php foreach ($cuidados as $cuidado): ?>
		<div class="col-xs-6 col-md-4">
			<h3><?php echo $cuidado['nome'] ?></h3>
			<div><?php echo $cuidado['descricao'] ?></div>
			<a href="cuidados/<?php echo $cuidado['nome'] ?>" class="pull-right">saiba mais</a>
		</div>
		<?php endforeach ?>
	</div>
</div>

