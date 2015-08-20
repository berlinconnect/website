<?php snippet('header') ?>
  <?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>
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
            <a href="#" class="button-outline h6 caps bold p1 border-bc-blue bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Learn about sundays']);"><?= $page->readmore() ?></a>
          </div>
          <div class="<?= $hwacols ?> center">
            <h5 class="caps"><?= $page->communitytitle() ?></h5>
            <p class="h4 regular px1 mb3 mid-gray"><?= $page->communitytext() ?></p>
            <a href="#" class="button-outline h6 caps bold p1 border-bc-blue bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Learn about midweek']);"><?= $page->readmore() ?></a>
          </div>
          <div class="<?= $hwacols ?> center">
            <h5 class="caps"><?= $page->socialtitle() ?></h5>
            <p class="h4 regular px1 mb3"><?= $page->socialtext() ?></p>
            <a href="#" class="button-outline h6 caps bold p1 border-bc-blue bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Learn about social']);"><?= $page->readmore() ?></a>
          </div>
        </div>
      </div>
    </div>
<?php snippet('footer') ?>
