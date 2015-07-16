<!-- Typography > Positioning > Layout > Color & Theme > State > Custom -->

<div class="clearfix grid">
  <div class="relative col col-4 square cover-bg" <?php if($image = $page->image('1.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
  </div>

  <div class="relative col col-4 square center">
    <div class="middle full-width">
      <div class="relative mx-auto grid-content">
        <h5 class="caps m0 mb3 bc-blue"><?= $page->abouttitle() ?></h5>
        <p class="h4 bold caps line-height-2 m0 mb2"><?= $page->aboutheader() ?></p>
        <p class="h4 regular"><?= $page->abouttext() ?></p>
      </div>
    </div>
  </div>

  <div class="relative col col-4 square cover-bg" <?php if($image = $page->image('2.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
  </div>

  <div class="relative col col-4 square center">
    <div class="middle full-width">
      <div class="relative mx-auto grid-content">
        <h5 class="caps m0 mb3 bc-orange">ENLARGE</h5>
        <p class="h4 bold caps line-height-2 m0 mb2">This is the title of the message of the month</p>
        <p class="h4 regular">This sunday we go to hear an amazing message from Mark. He spoke about something really awesome....</p>
        <a href="#" class="h5 bold caps m0 mt3 full-width inline-block bg-bc-white bc-orange">Listen Now</a>
      </div>
    </div>
  </div>

  <div class="relative col col-4 square cover-bg" <?php if($image = $page->image('3.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
  </div>

  <div class="relative col col-4 square center">
    <div class="middle full-width">
      <div class="relative mx-auto grid-content">
        <h5 class="caps m0 mb3 light-gray"><?= $page->subscribetitle() ?></h5>
        <p class="h4 bold caps line-height-2 m0 mb1"><?= $page->subscribeheader() ?></p>
        <p class="h4 regular m0 mb2"><?= $page->subscribetext() ?></p>
        <input class="p2 mt2 full-width border-box bg-bc-off-white" placeholder="<?= $page->subscribeinputplaceholder() ?>"></input>
        <button type="submit" class="p2 center full-width border-none bg-dark-gray bc-white"><?= $page->subscribesubmit() ?></button>
      </div>
    </div>
  </div>
</div>