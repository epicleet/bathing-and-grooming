

<div class="container">
	<div class="text-center">
		<h2><?php echo $pagina['subtitle'] ?></h2>
		<div><?php echo $pagina['text'] ?></div>
	</div>

	<div class="row">
		<?php foreach ($care as $cuidado): ?>
		<div class="col-xs-6 col-md-4">
			<h3><?php echo $cuidado['name'] ?></h3>
			<div><?php echo $cuidado['description'] ?></div>
			<a href="care/<?php echo $cuidado['name'] ?>" class="pull-right">saiba mais</a>
		</div>
		<?php endforeach ?>
	</div>
</div>

