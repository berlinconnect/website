<!-- Typograph > Positioning > Layout > Color & Theme > State > Custom -->

<div class="container py4 clearfix">
  <div class="center">
    <h1 class="m0 caps lighter"><?= $site->eventsectiontitle() ?></h1>
    <p class="h3 regular px1 col-inline col-8"><?= $site->eventsectioninfo() ?></p>
  </div>
  <div class="questions grid">
    <?php 
      $now = date('M d, Y');
      $now = strtotime($now);
      $sevenDays = strtotime("+7 day", $now); 
    ?>
    <?php foreach($pages->find('calendar')->children()->visible() as $event): ?>
      <?php $date = $event->date(); ?>
      <?php if ($date <= $sevenDays and $now <= $date ): ?>
        <div class="col col-3 event-container inline-block border-box p1 mt2">
        <!-- IMPORTANT: the image in the content folder/for every event must be named 1.jpg!!!!!!! -->
          <div class="relative drop-shadow event bg-light-gray p1 width-bg top-bg" <?php if($image = $event->image('1.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
            <div class="date align-left bc-white ml1">
              <h4 class="caps heavy m0 mt2 line-height-0"><?php echo $event->date('M') ?></h4>
              <h2 class="caps bold m0"><?php echo $event->date('d') ?></h2>
            </div>
            <div class="bg-faded-bc-white absolute full-width border-box bottom-0 left-0">
              <div class="p2">
                <h5 class="m0 caps mb1"><?php echo $event->title() ?></h5>
                <p class="small light-gray m0"><?php echo $event->text() ?></p>
              </div>
              <div class="bg-bc-off-white px2 py1">
                <a class='dark-gray' href='<?php echo $event->googlemapslink() ?>'><img src="../images/ui/location.svg" width="8px" class="mr1"><h6 class="caps inline-block m0"><?php echo $event->location() ?></h6></a>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
    <?php endforeach ?>
  </div>
  <div class="center mt3">
    <a class="button bg-bc-blue py2 px4">See full calendar</a>
  </div>
</div>