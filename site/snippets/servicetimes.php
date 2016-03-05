<div class="relative full-width bg-bc-blue bc-white center py2 center-bg cover-bg" <?php if($image = $page->image('service.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
  <div class="py4 relative z1">
    <h2 class="lighter mt0 mb2 tiny-mb2"><?= $page->oursundaygatherings() ?></h2>
    <p class="big px1 sm-px2 col-inline col-12 md-col-8"><?= $page->oursundaygatheringstext() ?></p>
    <h4 class="bold mt3 mb2 tiny-mb2"><?= $page->servicetimes() ?></h4>
    <p class="h4 bold px1 sm-px2 col-inline col-12 md-col-8 bc-white">
      <?php foreach($page->servicetimespots()->split() as $serviceTime): ?>
        <span class="px1 border border-bc-white rounded mxn1 mb2 sm-mb0 inline-block"><?php echo html($serviceTime) ?>:00</span>
      <?php endforeach ?>
    </p>
  </div>
  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray no-flex"></div>
  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray no-flex"></div>
  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray no-flex"></div>
</div>

<div class="center sm-mt4 mx-auto col-12 border-box sm-col-6 py3 px2 bg-bc-blue bc-white">
  <h2 class="lighter mt0 mb0 tiny-mb0"><?= $page->westberlintitle() ?></h2>
  <h4 class="bold mt0 mb2 tiny-mb2"><?= $page->westberlinsoon() ?></h4>
  <p class="big px1"><?= $page->westberlincopy() ?></p>
  <a href="<?= $page->westberlinlink() ?>"class="bg-bc-white button"><?= $page->westberlinbutton() ?></a>
</div>
