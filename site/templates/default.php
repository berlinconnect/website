<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>

  <div class="tiny-py3 xsm-py3 lg-py4 container clearfix">
    <div class="col-12 md-col-9 tiny-px1 xsm-px2 md-px0 border-box mx-auto">
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>
  <?php
    $calendarTag = $page->id();
    $events = $pages->find('calendar')->children()->filterBy('tag', $calendarTag, ',')->visible()->sortBy('date', 'asc')->limit(4);
    // integer to count how many events are not obsolete
    $notObsoleteItems = 0;
    // only show the event if events are available and not obsolete
    if($events->count()):
  ?>
    <div class="container clearfix mb4">
      <div class="center">
        <h1 class="m0 mb2 caps lighter"><?= $site->upcoming() ?></h1>
      </div>
      <div class="flex flex-wrap center full-width clearfix">
        <?php foreach($events as $event):{
          // get the current date and the date in seven days
          $now = date('M d, Y');
          $now = strtotime($now);
          // get date of the event
          $date = $event->date();
          if ($now <= $date) {
            $notObsoleteItems = $notObsoleteItems + 1;
          }
        } ?>
          <?= snippet('single-event', array('event' => $event)); ?>
        <?php endforeach ?>
      </div>
    </div>
  <?php endif ?>


<?php snippet('footer') ?>
