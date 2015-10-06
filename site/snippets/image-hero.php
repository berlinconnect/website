<!-- Typography > Positioning > Layout > Color & Theme > State > Custom -->

<div class="flex flex-center relative py3 full-width cover-bg general-hero <?= $bgPosition ?> <?= $bgAttachement ?>" style="background-image: url(<?php echo $page->images()->first()->url(); ?>)" data-adaptive-background data-ab-css-background>

  <?php snippet('menu', array('color' => 'bc-white')) ?>

  <div class="flex-auto z3 container center bc-white ">

    <?php if($page->id() == 'one-team'): ?>
      <div class="center py4 my4 tiny-my2 ">
        <div class="contain-bg center-bg" style="background-image:url('../images/logo/teamlogo.svg'); width:100%; height:300px;"></div>
      </div>
    <?php endif ?>

    <?php if($page->id() == 'h4th2015'): ?>
      <div class="center py4 my4 tiny-my2 ">
        <div class="contain-bg center-bg" style="background-image:url('<?= $page->image('h4h-logo-white.svg')->url() ?>'); width:100%; height:400px;"></div>
      </div>
    <?php endif ?>

    <?php if($page->id() == 'enlarge'): ?>
      <div class="center py4 my4 tiny-my2 ">
        <div class="contain-bg center-bg" style="background-image:url('<?= $page->image('enlarge-logo.svg')->url() ?>'); width:100%; height:150px;"></div>
      </div>
    <?php endif ?>

  </div>

  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray z2"></div>

</div>
