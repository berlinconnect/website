<?php snippet('header') ?>
<?php snippet('image-hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>

<div class="container clearfix">
  <div class="container pt4 tiny-pt2 px3 mt3 mb3 tiny-mt-1 tiny-mb1 clearfix">
    <div class="col col-12 sm-col-5">
      <p class="h3 bc-blue lighter tiny-mb3"><?= $page->introheader() ?></p>
    </div>
    <div class="col-right col-12 sm-col-6">
      <p><?= $page->introtext() ?></p>
    </div>
  </div>
  <div class="mx-auto">
    <h1 class="lighter center m0 mb1 bc-blue px0 sm-px4"><?= $page->tenreasonsheader() ?></h1>
    <?php $reasoncols = 'col-inline col-12 sm-col-6 tiny-px2 px3 grid-item' ?>
    <ol class="list-reset reasons grid mt3 px2 font-size-0">
      <li class="<?= $reasoncols ?>">
        <h5 class="caps"><?= $page->reason1header() ?></h5>
        <p class="small justify"><?= $page->reason1text() ?></p>
      </li>
      <li class="<?= $reasoncols ?>">
        <h5 class="caps"><?= $page->reason2header() ?></h5>
        <p class="small justify"><?= $page->reason2text() ?></p>
      </li>
      <li class="<?= $reasoncols ?>">
        <h5 class="caps"><?= $page->reason3header() ?></h5>
        <p class="small justify"><?= $page->reason3text() ?></p>
      </li>
      <li class="<?= $reasoncols ?>">
        <h5 class="caps"><?= $page->reason4header() ?></h5>
        <p class="small justify"><?= $page->reason4text() ?></p>
      </li>
      <li class="<?= $reasoncols ?>">
        <h5 class="caps"><?= $page->reason5header() ?></h5>
        <p class="small justify"><?= $page->reason5text() ?></p>
      </li>
      <li class="<?= $reasoncols ?>">
        <h5 class="caps"><?= $page->reason6header() ?></h5>
        <p class="small justify"><?= $page->reason6text() ?></p>
      </li>
      <li class="<?= $reasoncols ?>">
        <h5 class="caps"><?= $page->reason7header() ?></h5>
        <p class="small justify"><?= $page->reason7text() ?></p>
      </li>
      <li class="<?= $reasoncols ?>">
        <h5 class="caps"><?= $page->reason8header() ?></h5>
        <p class="small justify"><?= $page->reason8text() ?></p>
      </li>
      <li class="<?= $reasoncols ?>">
        <h5 class="caps"><?= $page->reason9header() ?></h5>
        <p class="small justify"><?= $page->reason9text() ?></p>
      </li>
      <li class="<?= $reasoncols ?>">
        <h5 class="caps"><?= $page->reason10header() ?></h5>
        <p class="small justify"><?= $page->reason10text() ?></p>
      </li>
    </ol>
  </div>
</div>
<div class="full-width clearfix bg-bc-blue bc-white py3 mt3">
  <div class="container center py3 tiny-py1">
    <p class="h1 lighter mb3 tiny-mb2"><?= $page->signupheader() ?></p>
    <p class="h3 lighter px1 sm-px2 col-inline col-12 md-col-8"><?= $page->signuptext() ?></p>
    <div class="mt3">
      <a href="<?= $page->formlink() ?>" class="h5 caps bold p2 center bg-bc-white bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Sign up for team']);"><?= $page->signupcalltoaction() ?></a>
    </div>
  </div>
</div>
<div class="full-width font-size-0" id="instafeed"></div>
<a id="load-more" class="full-width block center h1 bc-white border-box p3 pointer bg-bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'See more stories']);"><?= $page->moreinstagram() ?></a>

<?php snippet('footer') ?>
