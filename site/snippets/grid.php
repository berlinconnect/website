<div class="grid clearfix">
  <div class="relative col col-4 square cover-bg" <?php if($image = $page->image('1.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
  </div>

  <div class="relative col col-4 square center">
    <div class="middle full-width">
      <div class="relative mx-auto grid-content">
        <h5 class="caps m0 mb3 bc-blue">About</h5>
        <p class="h4 bold line-height-2 caps m0 mb2">Berlin Connect is a multicultural church in the heart of Berlin.</p>
        <p class="h4">'Love God, love people, love life'. Our motto is 'Come as you are'. Sitting together around a table of friendship and family is important for all of us.</p>
      </div>
    </div>
  </div>

  <div class="relative col col-4 square cover-bg" <?php if($image = $page->image('2.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
  </div>

  <div class="relative col col-4 square center">
    <div class="middle full-width">
      <div class="relative mx-auto grid-content">
        <h5 class="caps m0 mb3 bc-orange">ENLARGE</h5>
        <p class="h4 bold line-height-2 caps m0 mb2">This is the title of the message of the month</p>
        <p class="h4">This sunday we go to hear an amazing message from Mark. He spoke about something really awesome....</p>
        <a href="#" class="h5 m0 mt3 inline-block bold caps bg-bc-white bc-orange full-width">Listen Now</a>
      </div>
    </div>
  </div>

  <div class="relative col col-4 square cover-bg" <?php if($image = $page->image('3.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
  </div>

  <div class="relative col col-4 square center">
    <div class="middle full-width">
      <div class="relative mx-auto grid-content">
        <h5 class="caps m0 mb3 light-gray">SUBSCRIBE</h5>
        <p class="h4 bold line-height-2 caps m0 mb1">Help us help you to stay connected</p>
        <p class="h4 m0 mb2">Subscribe to our weekly newsletter giving you the latest information on whats happening at church.</p>
        <input class="mt2 full-width border-box p2 bg-bc-off-white" placeholder="Enter your email address"></input>
        <button type="submit" class="center border-none full-width  p2 bg-dark-gray bc-white">Send</button>
      </div>
    </div>
  </div>
</div>