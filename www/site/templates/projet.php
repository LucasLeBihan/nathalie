
<div id="main" class="noir" style="background-color:white">
	<?php snippet('header') ?>
	<?php echo js('assets/bundle.js') ?>
	<div id="intro">
		<div class="titre">
			<h3><?php echo $page->title() ?></h3>
			<h2><?php echo $page->infos() ?></h2>
		</div>
		<?php
		$image = $page->top_image()->toFile();
		if($image):
		?>
  		<img class="topImage" src="<?= $image->url() ?>" alt="">
  			<figcaption>
        	<?= $image->caption()->kirbytext() ?>
    		</figcaption>
		<?php endif ?>
		</div>
	<article>		
		<?php echo $page->text()->kirbytext() ?>
	</article>
</div>
