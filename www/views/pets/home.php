

<div id="banner">
	<div id="owl-banner" class="owl-carousel owl-theme">
		<?php foreach ($banners as $key => $banner): ?>
		<div class="item"><img class="lazyOwl" data-src="<?php echo $file->by_pass_cache($banner['img']) ?>" alt="<?php echo $banner['name'] ?>" /></div>
		<?php endforeach ?>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<h3>Adoption</h3>
			<div><?php echo $pagina['text'] ?></div>
		</div>

		<div class="col-xs-12 col-md-6">
			<h3>This week pets</h3>
			<a class="col-xs-offset-1 col-xs-5" href="#"><img src="<?php echo $file->by_pass_cache('uploads/pets/guarda.jpg') ?>" alt="" class="img-responsive img-circle" /></a>
			<a class="col-xs-offset-0 col-xs-5" href="#"><img src="<?php echo $file->by_pass_cache('uploads/pets/penelope.jpg') ?>" alt="" class="img-responsive img-circle" /></a>
		</div>
	
		<div class="col-xs-12 col-md-6">
			<h3>Dogs for adoption</h3>
			<?php foreach ($dogs as $pet): ?>
			<a class="col-xs-4" href="#"><img src="<?php echo $file->by_pass_cache($pet['photo']) ?>" alt="<?php echo $pet['name'] ?>" class="img-responsive img-circle" /></a>
			<?php endforeach ?>
		</div>

		<div class="col-xs-12 col-md-6">
			<h3>Cats for adoption</h3>
			<?php foreach ($cats as $pet): ?>
			<a class="col-xs-4" href="#"><img src="<?php echo $file->by_pass_cache($pet['photo']) ?>" alt="<?php echo $pet['name'] ?>" class="img-responsive img-circle" /></a>
			<?php endforeach ?>
		</div>
	</div>
</div>

