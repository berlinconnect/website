<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>

  <div class="tiny-py3 xsm-py3 lg-py4 container clearfix">
    <div class="col-12 md-col-9 tiny-px1 xsm-px2 md-px0 border-box mx-auto">
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>

<?php snippet('footer') ?>
