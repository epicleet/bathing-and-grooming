

<div class="container">
	<div class="text-center">
		<h2><?php echo $servico['nome'] ?></h2>
	</div>

	<div><?php echo nl2br(mb_substr($servico['texto'], 0, 4000)) ?></div>
</div>

