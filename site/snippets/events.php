<!-- Typograph > Positioning > Layout > Color & Theme > State > Custom -->

<div class="container pt4 clearfix">
  <div class="center">
    <h1 class="m0 caps lighter"><?= $page->eventsectionheader() ?></h1>
    <p class="h3 regular px1 border-box col-inline col-12 sm-col-10 md-col-9"><?= $page->eventsectioninfo() ?></p>
  </div>
  <div class="questions grid">
    <?php
      /*
        since the built-in Kirby limit() function won't be useable,
        because we need to filter dates as well,
        use $limitEvents variable to keep track of how many events have
        already been posted
      */
      $limitEvents = 1;

      // get the current date and the date in seven days
      $now = date('M d, Y');
      $now = strtotime($now);
      // $sevenDays = strtotime("+7 day", $now);

    ?>
    <?php foreach($pages->find('calendar')->children()->visible() as $event): ?>
      <?php
        // get date of the event
        $date = $event->date();
      ?>
      <?php
        /*
          only show the event if the event is not obsolete
          and will happen in less than or in exactly 7 days
          and there are less than 4 events posted already
        */

        /*
        it seems unnecessary to only show events that will happen in the next 7 days,
        only show the soonest max. 4 events
        */
        // if ($date <= $sevenDays and $now <= $date and $limitEvents <= 4){
        if ($now <= $date and $limitEvents <= 4){
          // increase by one, as part of keeping track how many events were posted already

          $limitEvents = $limitEvents + 1;

          snippet('single-event', array('event' => $event));
        }
      ?>
    <?php endforeach ?>
  </div>
</div>
<div class="container pb4 clearfix">
  <div class="center mt3">
    <a class="button bg-bc-blue py2 px4" href='<?php echo $pages->find('calendar')->url() ?>' onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'See full calendar']);">See full calendar</a>
  </div>
</div>
