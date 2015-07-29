<!-- Typography > Positioning > Layout > Color & Theme > State > Custom -->

<div class="full-width pb4 cover-bg <?= $bgPosition ?> <?= $bgAttachement ?>" style="background-image: url(<?php echo $page->images()->first()->url(); ?>)" data-adaptive-background data-ab-css-background>

  <?php snippet('menu', array('color' => 'bc-white')) ?>

  <div class="clearfix container center mt3 mb3 py3 bc-white">

    <?php if (strlen($page->herotitle()) != 0): ?>
      <h1 class="huge caps letter-spacing m0"><?= $page->herotitle() ?></h1>

    <?php else: ?>
      <div class="py4 my4">
        <?php if($page->id() == 'new-to-bc'): ?>
          <div class="py4 my4">
          </div>
        <?php endif ?>
        <?php if($page->id() == 'one-team'): ?>
          <div class="center">
            <div class="contain-bg center-bg" style="background-image:url('../images/logo/teamlogo.svg'); width:100%; height:300px;"></div>
          </div>
        <?php endif ?>
      </div>

    <?php endif ?>

    <?php if (strlen($page->herotext()) != 0): ?>
      <p class="h3 px1 border-box regular mx-auto col-inline col-12 md-col-9 lg-col-7 m0"><?= $page->herotext() ?></p>
    <?php endif ?>


    <?php if($page->isHomePage()): ?>

      <div class="py2 mb2">
        <div class="mx-auto col-inline col-1 border-top border-bc-white">
        </div>
      </div>
      <!-- divider -->
      <?php snippet('heroDivider') ?>
    <?php else: ?>

    <?php endif ?>

  </div>
</div>
