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

      <a href="<?= $pages->find('new-to-bc')->url() ?>" class="button inline-block md-hide mt3 h5 caps bg-bc-blue bc-white bold p2" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Go to new to bc on mobile']);"><?= $page->readmore() ?></a>

      <?php $hwacols = 'col col-12 sm-col-4 mb4' ?>

      <div class="col col-12 mt2 md-show border-box">
        <div class="<?= $hwacols ?> center">
          <h5 class="caps"><?= $page->sundaytitle() ?></h5>
          <p class="h4 regular px1 mb3"><?= $page->sundaytext() ?></p>
          <a href="<?= $pages->find('new-to-bc')->url() ?>" class="button-outline h6 caps bold p1 border-bc-blue bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Learn about sundays']);"><?= $page->readmore() ?></a>
        </div>
        <div class="<?= $hwacols ?> center">
          <h5 class="caps"><?= $page->communitytitle() ?></h5>
          <p class="h4 regular px1 mb3 mid-gray"><?= $page->communitytext() ?></p>
          <a href="<?= $pages->find('dinner-parties')->url() ?>" class="button-outline h6 caps bold p1 border-bc-blue bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Learn about midweek']);"><?= $page->readmore() ?></a>
        </div>
        <div class="<?= $hwacols ?> center">
          <h5 class="caps"><?= $page->socialtitle() ?></h5>
          <p class="h4 regular px1 mb3"><?= $page->socialtext() ?></p>
          <a href="<?= $pages->find('social-kindness')->url() ?>" class="button-outline h6 caps bold p1 border-bc-blue bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Learn about social']);"><?= $page->readmore() ?></a>
        </div>
      </div>
    </div>
  </div>

  <?php snippet('servicetimes') ?>
  <?php snippet('events') ?>
  <?php snippet('praiseprayer') ?>

  <div class="flex flex-center flex-column sm-flex-row full-width bg-dark-gray clearfix">
    <div class="col-12 sm-col-6 lg-col-4 tiny-center sm-left-align">
      <div class="relative bc-white p4 xsm-p3 sm-p3">
        <h5 class="bold caps line-height-2 m0"><?= $page->addressheader() ?></h5>

        <?php
          if ($page->venuelocation() == "kulturbrauerei") {
            snippet('address_kulturbrauerei');
          }
          else{
            snippet('address_maritimHotel');
          }
        ?>

      </div>
    </div>
    <div class="col-12 sm-col-6 lg-col-8 flex-auto map sm-show" id="map_canvas"></div>
  </div>
<?php snippet('footer') ?>
