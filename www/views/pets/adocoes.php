

<div class="container">
	<div class="text-center">
		<h2><?php echo $pagina['subtitulo'] ?></h2>
		<div><?php echo $pagina['texto'] ?></div>
	</div>

	<div class="row">
		<?php foreach ($adocoes as $adocao): ?>
		<a class="col-xs-4 col-sm-3 col-md-2 vertical-padding" href="#"><img src="<?php echo $file->by_pass_cache($adocao['foto']) ?>" alt="<?php echo $adocao['nome'] ?>" class="img-responsive img-circle" /></a>
		<?php endforeach ?>
	</div>
</div>

