<div class="col-12 sm-col-6 lg-col-3 event-container border-box p1 mt2 left-align overflow-hidden">
  <div class="relative drop-shadow event p1 overflow-hidden">

    <?php if (strlen($event->link()) > 1): ?>
      <a href="<?= $event->link() ?>" class="absolute top-0 left-0 bottom-0 right-0 z1"></a>
    <?php endif ?>

    <div class="absolute top-0 left-0 bottom-0 right-0 cover-bg top-bg bg-image" style="background-image: url(<?php if ($event->hasImages()){
      echo $event->images()->first()->url();
    } ?>)"></div>
    <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray no-flex"></div>
    <div class="date center bc-white mt1 relative z2">
      <h4 class="caps regular m0 line-height-1"><?php echo $event->date('M') ?></h4>
      <h2 class="caps regular m0"><?= $event->date('d') ?></h2>
    </div>
    <?php if (strlen($event->ticketprice()) != 0): ?>
    <span class="absolute right-0 top-0 m2 rounded pyhalf px1 h5 z4 dark-gray bg-bc-white">
      € <?= $event->ticketprice() ?>
    </span>
    <?php endif ?>
    <div class="bg-faded-bc-white absolute full-width border-box bottom-0 left-0">
      <?php if (strlen($event->ticketlink()) != 0): ?>
      <a href="<?= $event->ticketprice() ?>" class="block p1 center caps h5 bg-bc-blue bc-white p1">
        Buy Tickets
      </a>
      <?php endif ?>
      <div class="p2 border-box event-content relative z3">
        <h5 class="m0 caps mb1"><?= $event->title() ?></h5>
        <?php echo $event->text()->kirbytext() ?>
      </div>
      <?php if (strlen($event->googlemapslink()) != 0): ?>
        <a class='bg-bc-off-white px2 py1 block dark-gray z4 relative location' href='<?= $event->googlemapslink() ?>'><img src="../images/ui/location.svg" width="8px" class="mr1"><h6 class="caps inline-block m0"><?= $event->location() ?></h6></a>
      <?php else: ?>
        <span class='bg-bc-off-white px2 py1 block dark-gray z4 relative location'><img src="../images/ui/location.svg" width="8px" class="mr1"><h6 class="caps inline-block m0"><?= $event->location() ?></h6></span>
      <?php endif ?>
    </div>
  </div>
</div>
