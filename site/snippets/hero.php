<!-- Typograph > Positioning > Layout > Color & Theme > State > Custom -->

<div class="full-width pb4 cover-bg top-bg" style="background-image: url(<?php echo $page->images()->first()->url(); ?>)">

  <?php snippet('menu') ?>

  <div class="clearfix container center mt3 mb3 py3 bc-white">

    <h1 class="huge caps letter-spacing m0"><?= $page->herotitle() ?></h1>
    <?php if (strlen($page->herotext()) != 0): ?>
      <p class="h3 mx-auto col-inline col-7 m0"><?= $page->herotext() ?></p>
    <?php endif ?>

    <?php if($page->isHomePage()): ?>
      <!-- divider -->
      <?php snippet('heroDivider') ?>
    <?php else: ?>

    <?php endif ?>

  </div>
</div>