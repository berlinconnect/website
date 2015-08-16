<div class="xsm-col col-12 sm-col-6 lg-col-3  event-container inline-block border-box p1 mt2">
  <div class="relative drop-shadow event bg-light-gray p1 width-bg top-bg" <?php if($image = $event->image('1.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
    <a href="#" class="absolute top-0 left-0 bottom-0 right-0"></a>
    <div class="date align-left bc-white ml1">
      <h4 class="caps heavy m0 mt2 line-height-0"><?php echo $event->date('M') ?></h4>
      <h2 class="caps bold m0"><?php echo $event->date('d') ?></h2>
    </div>
    <div class="bg-faded-bc-white absolute full-width border-box bottom-0 left-0">
      <div class="p2">
        <h5 class="m0 caps mb1"><?php echo $event->title() ?></h5>
        <p class="small regular light-gray m0"><?php echo $event->text()->excerpt(100) ?></p>
      </div>
      <div class="bg-bc-off-white px2 py1">
        <a class='dark-gray' href='<?php echo $event->googlemapslink() ?>'><img src="../images/ui/location.svg" width="8px" class="mr1"><h6 class="caps inline-block m0"><?php echo $event->location() ?></h6></a>
      </div>
    </div>
  </div>
</div>
