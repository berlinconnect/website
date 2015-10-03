<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>

  <div class="tiny-py3 xsm-py3 lg-py4 container clearfix">
    <div class="col-12 md-col-9 tiny-px1 xsm-px2 md-px0 border-box mx-auto">
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>

  <div class="container clearfix mb4">
    <div class="center">
      <h1 class="m0 mb2 caps lighter"><?= $site->upcoming() ?></h1>
    </div>
    <div class="center full-width clearfix">

      <?php

      $calendarTag = $page->id();

      // nested menu
      $events = $pages->find('calendar')->children()->filterBy('tag', $calendarTag, ',')->visible()->sortBy('date', 'asc');

      // integer to count how many events are not obsolete
      $notObsoleteItems = 0;

      // only show the menu if items are available and not obsolete
      if($events->count()){
        foreach($events as $event){
          // get the current date and the date in seven days
          $now = date('M d, Y');
          $now = strtotime($now);

          // get date of the event
          $date = $event->date();

          if ($now <= $date) {
            $notObsoleteItems = $notObsoleteItems + 1;
            snippet('single-event', array('event' => $event));
          }
        }
      }
      else{
        echo "<div class='center mx-auto col-12 sm-col-6 bg-bc-off-white p3 mt4 mb3'>";
        echo "<p class='m0'>No upcoming events.</p>";
        echo "</div>";
      }
      ?>
    </div>
  </div>

<?php snippet('footer') ?>
