<!-- Typography > Positioning > Layout > Color & Theme > State > Custom -->

<div class="flex flex-center relative full-width cover-bg general-hero <?= $bgPosition ?> <?= $bgAttachement ?>" style="background-image: url(<?php echo $page->images()->first()->url(); ?>)" data-adaptive-background data-ab-css-background>

  <?php snippet('menu', array('color' => 'bc-white')) ?>

  <div class="flex-auto z4 container center bc-white">

    <h1 class="huge caps letter-spacing m0"><?= $page->herotitle() ?></h1>
    <?php if (strlen($page->herotext()) != 0): ?>
      <p class="h3 regular col-inline tiny-col-12 md-col-9 lg-col-7 mx-auto m0 px1 border-box"><?= $page->herotext() ?></p>
    <?php endif ?>

  </div>

  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray no-flex z3"></div>

</div>
