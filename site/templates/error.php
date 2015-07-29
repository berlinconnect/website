<?php snippet('header') ?>
<div class="wrapper page center error">
  <div class="logo"></div>
  <h1><?= html($page->title()) ?></h1>
  <?= kirbytext($page->text()) ?>
  <?php snippet('heroDivider') ?>
</div>
<?php snippet('footer') ?>