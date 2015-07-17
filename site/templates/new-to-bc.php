<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => 'fixed-bg')) ?>

<div class="container pt4 mt3 mb3 clearfix">
  <div class="col col-5">
    <p class="h3 bc-blue lighter"><?= $page->introquote() ?></p>
  </div>
  <div class="col-right col-6">
    <?= $page->introcopy()->kirbytext() ?>
  </div>
</div>
<div class="full-width border-box p3 clearfix">
  <div class="col col-12">
    <div class="font-size-0">
      <div class="col-inline col-6 vt border-box p1">
        <div>
          <?php if($image = $page->image('photo-1.jpg')): ?>
            <img class="wow fadeIn" src="<?= $image->url() ?>" width="100%" height="100%" data-adaptive-background>
          <?php endif ?>
        </div>
        </div>
      <div class="col-inline col-6 vt">
        <?php foreach($page->children()->find('grid')->images()->limit(9) as $image): ?>
          <div class="col-inline col-4 vt border-box p1">
            <div>
              <img class="wow fadeIn" src="<?php echo $image->url() ?>" width="100%" data-adaptive-background>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
  <div class="font-size-0">
    <div class="col-inline vm col-6 border-box full-height px4">
      <h5 class="caps m0 mb2"><?= $page->sundays() ?></h5>
      <p class="h4 regular bc-blue caps line-height-2 m0 mb2"><?= $page->sundayquote() ?>.</p>
      <?= $page->sundaycopy()->kirbytext() ?>
      <ul class="list-reset pt2">
        <li class="block">
          <p class="h6 caps light-gray mr1 mb1"><?= $site->moreinformation() ?></p>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1"><?= $site->conferences() ?></a>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1"><?= $site->kids() ?></a>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1"><?= $site->youth() ?></a>
        </li>
      </ul>
    </div>
    <div class="col-inline col-6 border-box p1">
      <div>
        <?php if($image = $page->image('sunday.jpg')): ?>
          <img class="wow fadeIn" src="<?= $image->url() ?>" width="100%" height="100%" data-adaptive-background>
        <?php endif ?>
      </div>
    </div>
    <div class="col-inline col-6 border-box p1">
      <div>
        <?php if($image = $page->image('community.jpg')): ?>
          <img class="wow fadeIn" src="<?= $image->url() ?>" width="100%" height="100%" data-adaptive-background>
        <?php endif ?>
      </div>
    </div>
    <div class="col-inline vm col-6 border-box full-height px4">
      <h5 class="caps m0 mb2"><?= $page->community() ?></h5>
      <p class="h4 regular bc-blue caps line-height-2 m0 mb2"><?= $page->communityquote() ?></p>
      <?= $page->communitycopy()->kirbytext() ?>
      <ul class="list-reset pt2">
        <li class="block">
          <p class="h6 caps light-gray mr1 mb1"><?= $site->moreinformation() ?></p>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1"><?= $site->dinnerparties() ?></a>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1"><?= $site->sisterhood() ?></a>
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
  <div class="col-5 center mx-auto">
    <h5 class="caps m0 mb2"><?= $page->society() ?></h5>
    <p class="h4 regular bc-blue caps line-height-2 m0 mb2">
      <?= $page->societyquote() ?>
    </p>
    <?= $page->societycopy()->kirbytext() ?>
    <ul class="list-reset pt2">
      <li class="block">
        <p class="h6 caps light-gray mr1 mb1"><?= $site->moreinformation() ?></p>
      </li>
      <li class="inline-block">
        <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1"><?= $site->socialkindness() ?></a>
      </li>
      <li class="inline-block">
        <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1"><?= $site->futureminded() ?></a>
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
  <div class="container center py3">
    <p class="h1 lighter mb3"><?= $page->areyoufree() ?></p>
    <p class="h3 lighter px1 col-inline col-8"><?= $page->areyoufreecopy() ?></p>
    <div class="mt3">
      <a href="" class="h5 caps bold p2 center bg-bc-white bc-blue"><?= $page->findus() ?></a>
    </div>
  </div>
</div>
<?php snippet('footer') ?>