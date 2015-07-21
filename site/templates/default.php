<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>

  <div class="container py4">
    <div class="col-9 mx-auto">
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>

<?php snippet('footer') ?>