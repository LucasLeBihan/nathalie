
<div id="main" class="noir" style="background-color:white">
	<?php snippet('header') ?>
	<?php echo js('assets/bundle.js') ?>

	<div class="table" id="cursus">
		<div class="case">
			<h3>Cursus</h3>
		<?php $cur = $page->cur()->yaml();?>
		<?php $cur = $page->cur()->yaml();
		foreach($cur as $cursus): ?>
  			<div class="date"><div class="line"></div><h1><?php echo $cursus['date'] ?></h1></div>
  			<div class="text"><div class="line"></div><p><?php echo $cursus['text'] ?></p></div>

		<?php endforeach ?>
	
	</div>
	</div>
	<div class="table" id="exposition">
		<div class="case">
			<h3>Expositions</h3>
		<?php $expos = $page->expos()->yaml();?>
		<?php $expos = $page->expos()->yaml();
		foreach($expos as $expo): ?>

  			<div class="date"><div class="line"></div><h1><?php echo $expo['datea'] ?></h1></div>
  			<div class="text"><div class="line"></div><p><?php echo $expo['texta'] ?></p></div>

		<?php endforeach ?>
	
	</div>
	</div>
</div>
