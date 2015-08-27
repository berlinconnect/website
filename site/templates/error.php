<?php snippet('header') ?>
<div class="clearfix">
	<div class="col col-12 body-full-height center error">
		<div class="logo"></div>
		<h1><?= html($page->title()) ?></h1>
		<?= kirbytext($page->text()) ?>
		<?= snippet('social', array('iconSize' => '30px')) ?>
	</div>
</div>

<?php snippet('footer') ?>