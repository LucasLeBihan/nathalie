<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  	<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  	<?php echo liveCSS('assets/bundle.css') ?>
</head>
	<?php $items = $pages->visible()->filterBy('template','projet'); ;
	if($items->count()):?>
	<div class="top">
		<h1><a href="<?php echo url() ?>"><?php echo $site->title()->html() ?></a>,</h1>
		<h2> <a href="#" onclick="show()">Projets</a>, <a href="informations">Informations</a>, <a href="https://www.instagram.com/nathaliealmange/">Instagram</a></h2>
	</div>
	<div id="summary">
		<?php foreach($items as $item): ?>
		<div class="line">
			<a <?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>">
				<h3><?php echo $item->title() ?></h3>
				<h2><?php echo $item->infos() ?></h2></a><br>
		</div>
		<?php endforeach ?>
	</div>
	<?php endif ?>
<body>

