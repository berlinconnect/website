<div class="relative py4 center mt3 mb3 overflow-hidden">
  <div class="date center bc-white m2 absolute left-0 top-0 relative z2">
    <h4 class="caps regular m0 line-height-1"><?= $page->specialeventdate('M') ?></h4>
    <h2 class="caps regular m0"><?= $page->specialeventdate('d') ?></h2>
  </div>
  <span class="absolute right-0 top-0 m2 caps letter-spacing-1 rounded pyhalf px1 h5 z4 dark-gray bg-bc-white"> <?= $page->specialeventspecial() ?>
  </span>
  <div class="center pb1 pt4 bc-white z2 relative">
    <h1 class="m0 caps lighter letter-spacing-2"><?= $page->specialeventtitle() ?></h1>
    <p class="regular px1 border-box col-inline col-12 md-col-8 mt2"><?= $page->specialeventtext() ?></p>
    <div>
    <a href="<?= $page->specialeventlocationlink() ?>" class="h5 bc-white inline-block mx-auto caps letter-spacing mt4"> <img src="../images/ui/location-white.svg" width="8px" class="mr1"><?= $page->specialeventlocation() ?></a>
    </div>
  </div>
  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray no-flex z0"></div>
  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray no-flex z0"></div>
  <div class="absolute left-0 top-0 right-0 bottom-0 blur cover-bg top-bg" style="background-image: url(<?php echo $page->image('special.jpg')->url(); ?>); z-index:-1;"></div>
</div>
