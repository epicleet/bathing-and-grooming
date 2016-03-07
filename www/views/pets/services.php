

<div class="container">
	<div class="text-center">
		<h2><?php echo $pagina['subtitle'] ?></h2>
		<div><?php echo $pagina['text'] ?></div>
	</div>

	<div class="row">
		<?php foreach ($services as $servico): ?>
		<div class="col-xs-12 col-md-6">
			<h3><?php echo $servico['name'] ?></h3>
			<div><?php echo $servico['description'] ?></div>
			<a href="services/<?php echo $servico['name'] ?>" class="pull-right">more</a>
		</div>
		<?php endforeach ?>
	</div>
</div>

