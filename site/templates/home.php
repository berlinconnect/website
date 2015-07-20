<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>
<?php snippet('grid') ?>
<div class="full-width bg-bc-off-white py4">
  <div class="container clearfix center">
    <p class="caps h4 regular letter-spacing-1 px3 line-height-3 m0 bc-blue">As a local church we are a community of everyday people in which Jesus is central to all we do as we seek to embrace our city and nation we live in with the love, hope and goodness of our compassionate and faithful God.</p>
    <div class="py3 divider">
      <div class="col-inline col-1 mx-auto border-top border-light-gray">
      </div>
    </div>
    <div class="col col-12 mt2 border-box">
      <div class="col col-4 center">
        <h5 class="caps"><?= $page->sundaytitle() ?></h5>
        <p class="h4 regular px1 mb3"><?= $page->sundaytext() ?></p>
        <a href="#" class="h6 caps bold p1 border border-bc-blue bc-blue"><?= $page->readmore() ?></a>
      </div>
      <div class="col col-4 center">
        <h5 class="caps"><?= $page->communitytitle() ?></h5>
        <p class="h4 regular px1 mb3 mid-gray"><?= $page->communitytext() ?></p>
        <a href="#" class="caps bold h6 p1 border border-bc-blue bc-blue"><?= $page->readmore() ?></a>
      </div>
      <div class="col col-4 center">
        <h5 class="caps"><?= $page->socialtitle() ?></h5>
        <p class="h4 regular px1 mb3"><?= $page->socialtext() ?></p>
        <a href="#" class="h6 caps bold p1 border border-bc-blue bc-blue"><?= $page->readmore() ?></a>
      </div>
    </div>
  </div>
</div>
<?php snippet('events') ?>
<div class="full-width bg-dark-gray clearfix">
  <div class="col col-4 center">
    <div class="relative mt4 mx-auto bc-white grid-content">
      <h5 class="caps m0 mb2 light-gray"><?= $page->subscribetitle() ?></h5>
      <p class="h4 bold caps line-height-2 m0 mb2"><?= $page->subscribeheader() ?></p>

        <p class="h4 regular m0 mb2 light-gray"><?= $page->subscribetext() ?></p>
      <input class="mt2 full-width p2 border-box bg-mid-gray" placeholder="<?= $page->subscribeinputplaceholder() ?>"></input>
      <button type="submit" class="center full-width p2 border-none bg-bc-white dark-gray"><?= $page->subscribesubmit() ?></button>
    </div>
  </div>
  <div class="map" id="map_canvas"></div>
  </div>
</div>
<?php snippet('footer') ?>