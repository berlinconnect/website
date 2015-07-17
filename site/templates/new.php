<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '')) ?>

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
      <ul class="list-reset pt2">
        <li class="block">
          <p class="h6 caps light-gray mr1 mb1">More Information</p>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1">Conferences</a>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1">Kids</a>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1">Youth</a>
        </li>
      </ul>
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
      <ul class="list-reset pt2">
        <li class="block">
          <p class="h6 caps light-gray mr1 mb1">More Information</p>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1">Dinner Parties</a>
        </li>
        <li class="inline-block">
          <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1">Sisterhood</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="full-width cover-bg" <?php if($image = $page->image('sisterhood.jpg')): ?>style="background-image:url('<?= $image->url() ?>'); height:500px;"<?php endif ?>>
</div>
<div class="full-width clearfix py4">
  <div class="col-5 center mx-auto">
    <h5 class="caps m0 mb2">Our Society</h5>
    <p class="h4 regular bc-blue caps line-height-2 m0 mb2">Shining brightly in society</p>
    <p>Our desire is to contribute to the well-being of society as a whole through social enterprise and leadership innovation. Out of the overflow of our lives we can serve our city by getting involved, finding and supporting positive solutions that place value, speak to people's potential and point to vision that shapes a better society.</p>
    <ul class="list-reset pt2">
      <li class="block">
        <p class="h6 caps light-gray mr1 mb1">More Information</p>
      </li>
      <li class="inline-block">
        <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1">Social Kindnesss</a>
      </li>
      <li class="inline-block">
        <a href="#" class="h6 caps p1 bc-white bg-bc-blue mr1">futureminded</a>
      </li>
    </ul>
  </div>
  <div class="container mt4">
    <div class="font-size-0">
      <div class="col-inline col-6 border-box p1">
        <?php if($image = $page->image('charitywater.jpg')): ?><img src="<?= $image->url() ?>" width="100%" height="100%" /><?php endif ?>
      </div>
      <div class="col-inline col-6 border-box p1">
        <?php if($image = $page->image('a21.jpg')): ?><img src="<?= $image->url() ?>" width="100%" height="100%" /><?php endif ?>
      </div>
      <div class="col-inline col-12 border-box p1">
        <?php if($image = $page->image('visionrescue.jpg')): ?><img src="<?= $image->url() ?>" width="100%" height="100%" /><?php endif ?>
      </div>
    </div>
  </div>
</div>
<div class="full-width clearfix bg-bc-blue bc-white py4">
  <div class="container center py3">
    <p class="h1 lighter mb3">Are you free this Sunday?</p>
    <p class="h3 regular px1 col-inline col-8">We are unashamedly passionate about the House of God. We welcome visitors at Berlin Connect and would love to have you join us in church this weekend.</p>
    <div class="mt3">
      <a href="" class="h5 caps bold p2 center bg-bc-white bc-blue">Find Us on a map</a>
    </div>
  </div>
</div>
<?php snippet('footer') ?>