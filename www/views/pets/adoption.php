

<div class="container">
	<div class="text-center">
		<h2><?php echo $pagina['subtitle'] ?></h2>
		<div><?php echo $pagina['text'] ?></div>
	</div>

	<div class="row">
		<?php foreach ($adoption as $adocao): ?>
		<a class="col-xs-4 col-sm-3 col-md-2 vertical-padding" href="#"><img src="<?php echo $file->by_pass_cache($adocao['photo']) ?>" alt="<?php echo $adocao['name'] ?>" class="img-responsive img-circle" /></a>
		<?php endforeach ?>
	</div>
</div>

