<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => 'fixed-bg')) ?>

<div class="container pt4 mt3 mb3 clearfix">
  <div class="col col-5">
    <p class="h3 bc-blue lighter">Our philosophy is simply to love God, love people and love life. </p>
  </div>
  <div class="col-right col-6">
    <p>We are multicultural church in the heart of Berlin, changing people's perceptions about Jesus and His Church. Our philosophy is simply to love God, love people and love life. Our motto is - 'Come as you are'</p>
  </div>
</div>
<div class="full-width border-box p3 clearfix">
  <div class="col col-12">
    <div class="font-size-0">
      <div class="col-inline col-6 vt border-box p1">
        <?php if($image = $page->image('photo-1.jpg')): ?><img src="<?= $image->url() ?>" width="100%" height="100%" /><?php endif ?>
      </div>
      <div class="col-inline col-6 vt">
        <div class="col-inline col-4 vt border-box p1"><?php if($image = $page->image('photo-2.jpg')): ?><img src="<?= $image->url() ?>" width="100%" /><?php endif ?></div>
        <div class="col-inline col-4 vt border-box p1"><?php if($image = $page->image('photo-3.jpg')): ?><img src="<?= $image->url() ?>" width="100%" /><?php endif ?></div>
        <div class="col-inline col-4 vt border-box p1"><?php if($image = $page->image('photo-4.jpg')): ?><img src="<?= $image->url() ?>" width="100%" /><?php endif ?></div>
        <div class="col-inline col-4 vt border-box p1"><?php if($image = $page->image('photo-5.jpg')): ?><img src="<?= $image->url() ?>" width="100%" /><?php endif ?></div>
        <div class="col-inline col-4 vt border-box p1"><?php if($image = $page->image('photo-6.jpg')): ?><img src="<?= $image->url() ?>" width="100%" /><?php endif ?></div>
        <div class="col-inline col-4 vt border-box p1"><?php if($image = $page->image('photo-7.jpg')): ?><img src="<?= $image->url() ?>" width="100%" /><?php endif ?></div>
        <div class="col-inline col-4 vt border-box p1"><?php if($image = $page->image('photo-8.jpg')): ?><img src="<?= $image->url() ?>" width="100%" /><?php endif ?></div>
        <div class="col-inline col-4 vt border-box p1"><?php if($image = $page->image('photo-9.jpg')): ?><img src="<?= $image->url() ?>" width="100%" /><?php endif ?></div>
        <div class="col-inline col-4 vt border-box p1"><?php if($image = $page->image('photo-10.jpg')): ?><img src="<?= $image->url() ?>" width="100%" /><?php endif ?></div>
      </div>
    </div>
  </div>
  <div class="font-size-0">
    <div class="col-inline vm col-6 border-box full-height px4">
      <h5 class="caps m0 mb2">Our Sundays</h5>
      <p class="h4 regular bc-blue caps line-height-2 m0 mb2">Sundays are Jesus-focused and people-empowering.</p>
      <p>Our desire is that Sundays in God’s House will be a place where people from all walks of life can come and feel 'AT HOME'. A place of connection with God and each other, of encouragement and worship, a place where guests become family.</p>
      <p>Our services include live music, kids & youth activities for 1-18 year olds and translation to German, Spanish and Portuguese.</p>
    </div>
    <div class="col-inline col-6 border-box p1">
      <?php if($image = $page->image('sunday.jpg')): ?><img src="<?= $image->url() ?>" width="100%" height="100%" /><?php endif ?>
    </div>
    <div class="col-inline col-6 border-box p1">
      <?php if($image = $page->image('community.jpg')): ?><img src="<?= $image->url() ?>" width="100%" height="100%" /><?php endif ?>
    </div>
    <div class="col-inline vm col-6 border-box full-height px4">
      <h5 class="caps m0 mb2">Our Community</h5>
      <p class="h4 regular bc-blue caps line-height-2 m0 mb2">Connecting our Sundays to our Midweek.</p>
      <p>Sitting together around a table of friendship and family is important for all of us. As a church we place great value on developing meaningful and personal connections midweek through our Dinner Parties. These are hosted throughout the city and enable us to put into practice midweek what we are learning on Sundays.</p>
      <p>Dinner Parties with purpose are not merely about 'what is on' the table but more about 'who is around' the table.</p>
    </div>
  </div>
</div>
<div class="full-width">
  <?php if($image = $page->image('sisterhood.jpg')): ?><img src="<?= $image->url() ?>" width="100%" /><?php endif ?>
</div>
<?php snippet('footer') ?>