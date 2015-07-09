<?php snippet('header') ?>
<?php snippet('hero') ?>
<?php snippet('grid') ?>
<div class="full-width bg-bc-off-white py4">
  <div class="container clearfix center">
    <p class="caps h4 m0 regular letter-spacing-1 px3 line-height-3 bc-blue">As a local church we are a community of everyday people in which Jesus is central to all we do as we seek to embrace our city and nation we live in with the love, hope and goodness of our compassionate and faithful God.</p>
    <div class="divider py3">
      <div class="mx-auto col-inline col-1 border-top border-light-gray">
      </div>
    </div>
    <div class="col col-12 mt2 border-box">
      <div class="col col-4 center">
        <h5 class="caps">Sunday</h5>
        <p class="h4 px1 mb3">As a local church we are a community of everyday people in which Jesus is central to all we do as we seek to embrace our city and nation.</p>
        <a href="#" class="p1 border border-bc-blue caps bold bc-blue h6">Read More</a>
      </div>
      <div class="col col-4 center">
        <h5 class="caps">Community</h5>
        <p class="h4 px1 mb3 mid-gray">As a local church we are a community of everyday people in which Jesus is central to all we do as we seek to embrace our city and nation.</p>
        <a href="#" class="p1 border border-bc-blue caps bold bc-blue h6">Read More</a>
      </div>
      <div class="col col-4 center">
        <h5 class="caps">Social enterprise</h5>
        <p class="h4 px1 mb3">As a local church we are a community of everyday people in which Jesus is central to all we do as we seek to embrace our city and nation.</p>
        <a href="#" class="p1 border border-bc-blue caps bold bc-blue h6">Read More</a>
      </div>
    </div>
  </div>
</div>
<?php snippet('events') ?>
<div class="full-width bg-dark-gray clearfix">
  <div class="col col-4 center">
    <div class="relative mt4 mx-auto grid-content bc-white">
      <h5 class="caps m0 mb2 light-gray">SUBSCRIBE</h5>
      <p class="h4 bold line-height-2 caps m0 mb2">Help us help you to stay connected</p>

        <p class="h4 m0 light-gray mb2">Subscribe to our weekly newsletter giving you the latest information on whats happening at church.</p>
      <input class="mt2 full-width border-box p2 bg-mid-gray" placeholder="Enter your email address"></input>
      <button type="submit" class="center border-none full-width  p2 bg-bc-white dark-gray">Send</button>
    </div>
  </div>
  <div class="col col-8 cover-bg full-height map" <?php if($image = $page->image('map.png')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>

  </div>
</div>
<?php snippet('footer') ?>