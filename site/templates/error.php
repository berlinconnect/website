<?php snippet('header') ?>
<div class="clearfix table body-full-height bc-white cover-bg center-bg" style="background-image: url(<?php echo $page->images()->first()->url(); ?>)">
	<div class="table-cell vm mx-auto tiny-col-10 xsm-col-9 md-col-6 center error py4">
		<img src="../images/logo/light-bc-white.svg" width="150px" alt="bc"/>
		<h1><?= $page->title() ?></h1>
		<?= $page->text()->kirbytext() ?>

		<?= snippet('social', array('iconSize' => '30px')) ?>
		<a href="/" class="button inline-block mt3 bg-bc-white dark-gray p2" style="color:black;"><?= $page->button() ?></a>
	</div>
</div>

<?php snippet('footer') ?>
