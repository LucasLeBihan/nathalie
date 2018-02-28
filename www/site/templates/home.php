<?php
	$bgimage = $page->bg_image()->toFile();
	if($bgimage):
?>
<div id="main" class="blanc" style="background:url(<?= $bgimage->url() ?>)">
	<?php snippet('header') ?>
	<?php snippet('footer') ?>
</div>
<?php endif ?>

