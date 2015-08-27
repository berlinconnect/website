<?php snippet('header') ?>
<div class="clearfix">
	<div class="col col-12 center error">
		<div class="logo"></div>
		<h1><?= html($page->title()) ?></h1>
		<?= kirbytext($page->text()) ?>
		<?php snippet('heroDivider') ?>
	</div>
</div>

<?php echo js('js/libs/jquery.js') ?>
<?php echo js('js/components/sidebar.js') ?>

</body>
</html>