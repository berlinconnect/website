<div class="relative full-width bg-bc-blue bc-white center py2 center-bg cover-bg" <?php if($image = $page->image('service.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
  <div class="py4 relative z1">
    <h2 class="lighter mt0 mb2 tiny-mb2"><?= $page->oursundaygatherings() ?></h2>
    <p class="h3 lighter px1 sm-px2 col-inline col-12 md-col-8"><?= $page->oursundaygatheringstext() ?></p>
    <h4 class="bold mt3 mb2 tiny-mb2"><?= $page->servicetimes() ?></h4>
    <p class="h4 bold px1 sm-px2 col-inline col-12 md-col-8 bc-white">

      <?php foreach($page->servicetimespots()->split() as $serviceTime): ?>
        <span class="px1 border border-bc-white rounded mxn1 mb2 sm-mb0 inline-block"><?php echo html($serviceTime) ?></span>
      <?php endforeach ?>

    </p>
  </div>
  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray no-flex"></div>
  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray no-flex"></div>
  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray no-flex"></div>
</div>
