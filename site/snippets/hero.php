<!-- Typograph > Positioning > Layout > Color & Theme > State > Custom -->

<div class="full-width pb4 cover-bg top-bg" style="background-image: url(<?php echo $page->images()->first()->url(); ?>)">

  <?php snippet('menu') ?>

  <div class="clearfix container center mt3 mb3 py3 bc-white">

    <h1 class="huge caps letter-spacing m0"><?= $page->herotitle() ?></h1>
    <p class="h3 mx-auto col-inline col-7 m0"><?= $page->herotext() ?></p>

    <!-- divider -->
    <div class="py2">
      <div class="mx-auto col-inline col-1 border-top border-bc-white">
      </div>
    </div>
    <!-- end -->

    <div class="mt2">
      <a class="display-inline mr3">
        <img src="../images/social/facebook.svg" width="30px">
      </a>
      <a class="display-inline mr3">
        <img src="../images/social/twitter.svg" width="36px">
      </a>
      <a class="display-inline">
        <img src="../images/social/instagram.svg" width="30px">
      </a>
    </div>

  </div>
</div>