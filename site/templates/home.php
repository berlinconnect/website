<?php snippet('header') ?>
  <?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>
  <?php snippet('grid') ?>
  <div class="full-width bg-bc-off-white py4">
    <div class="container clearfix center">
      <p class="caps h4 regular letter-spacing-1 px3 line-height-3 m0 bc-blue">As a local church we are a community of everyday people in which Jesus is central to all we do as we seek to embrace our city and nation we live in with the love, hope and goodness of our compassionate and faithful God.</p>
      <div class="py3 divider md-show">
        <div class="col-inline col-1 mx-auto border-top border-light-gray">
        </div>
      </div>

      <a href="/new-to-bc" class="inline-block md-hide mt3 h5 caps bg-bc-blue bc-white bold p2">Find out more</a>

      <?php $hwacols = 'col col-12 sm-col-4 mb4' ?>
      <div class="col col-12 mt2 md-show border-box">
        <div class="<?= $hwacols ?> center">
          <h5 class="caps"><?= $page->sundaytitle() ?></h5>
          <p class="h4 regular px1 mb3"><?= $page->sundaytext() ?></p>
          <a href="#" class="h6 caps bold p1 border border-bc-blue bc-blue"><?= $page->readmore() ?></a>
        </div>
        <div class="<?= $hwacols ?> center">
          <h5 class="caps"><?= $page->communitytitle() ?></h5>
          <p class="h4 regular px1 mb3 mid-gray"><?= $page->communitytext() ?></p>
          <a href="#" class="caps bold h6 p1 border border-bc-blue bc-blue"><?= $page->readmore() ?></a>
        </div>
        <div class="<?= $hwacols ?> center">
          <h5 class="caps"><?= $page->socialtitle() ?></h5>
          <p class="h4 regular px1 mb3"><?= $page->socialtext() ?></p>
          <a href="#" class="h6 caps bold p1 border border-bc-blue bc-blue"><?= $page->readmore() ?></a>
        </div>
      </div>
    </div>
  </div>
  <?php snippet('events') ?>
  <div class="full-width bg-dark-gray clearfix">
    <div class="col col-4">
      <div class="relative mt3 mx-auto bc-white grid-content">
        <h5 class="h4 bold caps line-height-2 m0 mb1"><?= $page->addresstitle() ?></h5>
        <p class="h4 regular m0 mb3"><?= $page->addresstext() ?></p>
        <p class="h4 bold caps line-height-2 m0 mb1"><?= $page->transporttitle() ?></p>
        <p>Alexanderplatz:</p>
        <div class="connections">
          <span style="background-color:#F05921">U2</span><span style="background-color:#825942">U5</span><span style="background-color:#0D619E">U8</span><span class="s" style="background-color:#F47922">S5</span><span class="s" style="background-color:#7A6CAC">S7</span><span class="s" style="background-color:#7A6CAC">S75</span>
        </div>
        <div class="m connections">
          <span>M4</span><span>M5</span><span>M6</span><span>M8</span><span>M48</span>
        </div>
        <br>
        <p>Hackescher Markt:</p>
        <div class="s connections">
          <span class="s" style="background-color:#F47922">S5</span><span class="s" style="background-color:#7A6CAC">S7</span><span class="s" style="background-color:#7A6CAC">S75</span>
        </div>
        <div class="m connections">
          <span>M1</span><span>M4</span><span>M5</span>
        </div>
      </div>
    </div>
    <div class="map" id="map_canvas"></div>
  </div>
<?php snippet('footer') ?>
