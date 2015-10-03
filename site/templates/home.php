<?php snippet('header') ?>
  <?php snippet('videohero') ?>
  <?php snippet('grid') ?>
  <div class="full-width bg-bc-off-white py4">
    <div class="container clearfix center">

      <p class="caps h4 regular tiny-justify sm-justify md-center letter-spacing-1 px3 line-height-3 m0 bc-blue"><?= $page->overview() ?></p>

      <div class="py3 divider md-show">
        <div class="col-inline col-1 mx-auto border-top border-light-gray">
        </div>
      </div>

      <a href="/new-to-bc" class="button inline-block md-hide mt3 h5 caps bg-bc-blue bc-white bold p2" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Go to new to bc on mobile']);"><?= $page->readmore() ?></a>

      <?php $hwacols = 'col col-12 sm-col-4 mb4' ?>

      <div class="col col-12 mt2 md-show border-box">
        <div class="<?= $hwacols ?> center">
          <h5 class="caps"><?= $page->sundaytitle() ?></h5>
          <p class="h4 regular px1 mb3"><?= $page->sundaytext() ?></p>
          <a href="new-to-bc" class="button-outline h6 caps bold p1 border-bc-blue bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Learn about sundays']);"><?= $page->readmore() ?></a>
        </div>
        <div class="<?= $hwacols ?> center">
          <h5 class="caps"><?= $page->communitytitle() ?></h5>
          <p class="h4 regular px1 mb3 mid-gray"><?= $page->communitytext() ?></p>
          <a href="dinner-parties" class="button-outline h6 caps bold p1 border-bc-blue bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Learn about midweek']);"><?= $page->readmore() ?></a>
        </div>
        <div class="<?= $hwacols ?> center">
          <h5 class="caps"><?= $page->socialtitle() ?></h5>
          <p class="h4 regular px1 mb3"><?= $page->socialtext() ?></p>
          <a href="social-kindness" class="button-outline h6 caps bold p1 border-bc-blue bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Learn about social']);"><?= $page->readmore() ?></a>
        </div>
      </div>
    </div>
  </div>

  <?php snippet('events') ?>

  <div class="full-width bg-dark-gray clearfix">
    <div class="col col-6 lg-col-4 sm-show">
      <div class="relative mt3 mx-auto bc-white grid-content">
        <h5 class="bold caps line-height-2 m0"><?= $page->addressheader() ?></h5>
        <p class="h4 regular m0 mb3"><?= $page->churchaddress()?></p>
        <!-- only for this weekend, hide entrance info for Haus Ungarn, since we are at Maritim Hotel -->
        <!-- <p class="small italic mb3 light-gray"><?= $page entranceInfo()?></p> -->
        <h5 class="bold caps line-height-2 m0"><?= $page->transporttitle() ?></h5>
        <p class="m0">Alexanderplatz:</p>
        <div class="connections">
          <span style="background-color:#F05921">U2</span><span style="background-color:#825942">U5</span><span style="background-color:#0D619E">U8</span><span class="s" style="background-color:#F47922">S5</span><span class="s" style="background-color:#7A6CAC">S7</span><span class="s" style="background-color:#7A6CAC">S75</span>
        </div>
        <div class="m connections">
          <span>M4</span><span>M5</span><span>M6</span><span>M8</span><span>M48</span>
        </div>
        <br>
        <p class="m0">Hackescher Markt:</p>
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
