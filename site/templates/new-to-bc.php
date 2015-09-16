<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'top-bg')) ?>

<div class="container pt4 tiny-pt2 px3 mt3 mb3 tiny-mt-1 tiny-mb1 clearfix">
  <div class="col col-12 sm-col-5">
    <p class="h3 bc-blue lighter tiny-mb3"><?= $page->introquote() ?></p>
  </div>
  <div class="col-right col-12 sm-col-6">
    <?= $page->introcopy()->kirbytext() ?>
  </div>
</div>
<div class="full-width border-box p3 tiny-p2 clearfix">
  <div class="col col-12">
    <div class="font-size-0">
      <div class="col-inline col-12 sm-col-6 vt border-box p1">
        <div>
          <?php if($image = $page->image('photo-1.jpg')): ?>
            <img class="wow fadeIn" src="<?= $image->url() ?>" width="100%" height="100%" data-adaptive-background>
          <?php endif ?>
        </div>
        </div>
      <div class="col-inline col-12 sm-col-6 vt">
        <?php
          $images = $page->children()->find('grid')->images()->limit(9);
          $count = $images->count();
          $index = 0;
        ?>
        <?php foreach($images->limit(9) as $image): $index++; ?>
          <div class="col-inline col-6 sm-col-4 vt border-box p1 <?php if($count == $index) echo 'tiny-hide' ?>">
            <div>
              <img class="wow fadeIn" src="<?php echo $image->url() ?>" width="100%" data-adaptive-background>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
  <div class="font-size-0">
    <div class="col-inline vm col-12 md-col-6 tiny-center sm-center md-left border-box full-height px4 sm-pt4 sm-pb3 tiny-px1 tiny-py4 sm-px2 md-px2 md-pt4 lg-px4">
      <h5 class="caps m0 mb2"><?= $page->sundays() ?></h5>
      <p class="h4 regular bc-blue caps line-height-2 m0 mb2"><?= $page->sundayquote() ?>.</p>
      <span class="tiny-justify"><?= $page->sundaycopy()->kirbytext() ?></span>
      <ul class="list-reset m0 pt2">
        <li class="block">
          <p class="h6 caps light-gray mr1 mb1"><?= $site->moreinformation() ?></p>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1" onclick="_gaq.push(['_trackEvent', 'Links', 'Clicked', 'Learn about conferences']);"><?= $site->conferences() ?></a>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1" onclick="_gaq.push(['_trackEvent', 'Links', 'Clicked', 'Learn about kids']);"><?= $site->kids() ?></a>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1" onclick="_gaq.push(['_trackEvent', 'Links', 'Clicked', 'Learn about youth']);"><?= $site->youth() ?></a>
        </li>
      </ul>
    </div>
    <div class="col-inline col-12 md-col-6 border-box p1">
      <div>
        <?php if($image = $page->image('sunday.jpg')): ?>
          <img class="wow fadeIn" src="<?= $image->url() ?>" width="100%" height="100%" data-adaptive-background>
        <?php endif ?>
      </div>
    </div>
    <div class="col-inline col-12 md-col-6 border-box p1">
      <div>
        <?php if($image = $page->image('community.jpg')): ?>
          <img class="wow fadeIn" src="<?= $image->url() ?>" width="100%" height="100%" data-adaptive-background>
        <?php endif ?>
      </div>
    </div>
    <div class="col-inline vm col-12 md-col-6 tiny-center sm-center md-left border-box full-height px4 sm-pt4 sm-pb3 tiny-px1 tiny-py4 sm-px2 md-px2 md-pt4 lg-px4">
      <h5 class="caps m0 mb2"><?= $page->community() ?></h5>
      <p class="h4 regular bc-blue caps line-height-2 m0 mb2"><?= $page->communityquote() ?></p>
      <span class="tiny-justify"><?= $page->communitycopy()->kirbytext() ?></span>
      <ul class="list-reset pt2">
        <li class="block">
          <p class="h6 caps light-gray mr1 mb1"><?= $site->moreinformation() ?></p>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1" onclick="_gaq.push(['_trackEvent', 'Links', 'Clicked', 'Learn about dinner parties']);"><?= $site->dinnerparties() ?></a>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1" onclick="_gaq.push(['_trackEvent', 'Links', 'Clicked', 'Learn about sisterhood']);"><?= $site->sisterhood() ?></a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="full-width cover-bg">
  <div class="font-size-0">
  <?php if($image = $page->image('sisterhood.jpg')): ?>
    <img class="wow fadeIn" src="<?= $image->url() ?>" width="100%" height="auto" data-adaptive-background>
  <?php endif ?>
  </div>
</div>
<div class="full-width clearfix py4">
  <div class="col-12 border-box tiny-px2 m-px2 sm-col-10 md-col-7 lg-col-5 center mx-auto">
    <h5 class="caps m0 mb2"><?= $page->society() ?></h5>
    <p class="h4 regular bc-blue caps line-height-2 m0 mb2">
      <?= $page->societyquote() ?>
    </p>
    <span class="tiny-justify"><?= $page->societycopy()->kirbytext() ?></span>
    <ul class="list-reset pt2">
      <li class="block">
        <p class="h6 caps light-gray mr1 mb1"><?= $site->moreinformation() ?></p>
      </li>
      <li class="inline-block">
        <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1" onclick="_gaq.push(['_trackEvent', 'Links', 'Clicked', 'Learn about social kindness']);"><?= $site->socialkindness() ?></a>
      </li>
      <li class="inline-block">
        <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1" onclick="_gaq.push(['_trackEvent', 'Links', 'Clicked', 'Learn about futureminded']);"><?= $site->futureminded() ?></a>
      </li>
    </ul>
  </div>
  <div class="container mt4">
    <div class="font-size-0">
      <div class="col-inline col-6 border-box p1">
        <div>
          <?php if($image = $page->image('charitywater.jpg')): ?>
            <img class="wow fadeIn" src="<?= $image->url() ?>" width="100%" height="100%" data-adaptive-background>
          <?php endif ?>
        </div>
      </div>
      <div class="col-inline col-6 border-box p1">
        <div>
          <?php if($image = $page->image('a21.jpg')): ?>
            <img class="wow fadeIn" src="<?= $image->url() ?>" width="100%" height="100%" data-adaptive-background>
          <?php endif ?>
        </div>
      </div>
      <div class="col-inline col-12 border-box p1">
        <div>
          <?php if($image = $page->image('visionrescue.jpg')): ?>
            <img class="wow fadeIn" src="<?= $image->url() ?>" width="100%" height="100%" data-adaptive-background>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="full-width clearfix bg-bc-blue bc-white py4">
  <div class="container center py3 tiny-py1">
    <p class="h1 lighter mb3 tiny-mb2"><?= $page->areyoufree() ?></p>
    <p class="h3 lighter px1 sm-px2 col-inline col-12 md-col-8"><?= $page->areyoufreecopy() ?></p>
    <div class="mt3">
      <a href="" class="button h5 caps bold p2 center bg-bc-white bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Find us on a map']);"><?= $page->findus() ?></a>
    </div>
  </div>
</div>
<?php snippet('footer') ?>
