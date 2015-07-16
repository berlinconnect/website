<?php snippet('header') ?>
<?php snippet('menu', array('color' => 'dark-gray')) ?>

  <div class="container py4">
    <p class="h1 center letter-spacing m0 mb4"><?= $page->herotitle() ?></p>
    <div class="clearfix">
      <?php if (strlen($page->rightcolumn()) != 0): ?>
        <div class="col col-7">
          <?= $page->leftcolumn()->kirbytext() ?>
        </div>
        <div class="col col-5 pl3">
          <?= $page->rightcolumn()->kirbytext() ?>
        </div>
      <?php else: ?>
      <div class="col col-12">
        <div class="col-9 mx-auto">
          <?= $page->leftcolumn()->kirbytext() ?>
       </div>
      </div>

      <?php endif ?>

    </div>
  </div>

<?php snippet('footer') ?>