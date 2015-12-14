<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>

  <div class="tiny-py3 xsm-py3 lg-py4 container clearfix default-page">
    <div class="col-12 md-col-9 tiny-px1 xsm-px2 md-px0 border-box mx-auto">
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>
  <?php $calendarTag = $page->id(); $events = $pages->find('calendar')->children()->filterBy('tag', $calendarTag, ',')->visible()->sortBy('date', 'asc')->limit(4);
    // only show the event if events are available and not obsolete
    if($events->count()  > 0 ):
  ?>

    <div class="container clearfix mb4">
      <div class="center">
        <h1 class="m0 mb2 caps lighter"><?= $site->upcoming() ?></h1>
      </div>
      <div class="flex flex-wrap center flex-justify full-width clearfix">
        <?php
          foreach($pages->find('calendar')->children()->visible()->filterBy('tag', $calendarTag, ',')->sortBy('date', 'asc') as $event): ?>
          <?php
            // get the current date and the date in seven days
            $now = date('M d, Y');
            $now = strtotime($now);

            // get date of the event
            $date = $event->date();

            if ($now <= $date) {
              snippet('single-event', array('event' => $event));
            }

          ?>

          <!-- endif ?>  -->
        <?php endforeach ?>
      </div>
    </div>

  <?php endif ?>
  <?php if($page->id() == 'changeThisLater'): ?>
    <div class="full-width block center h1 bc-white border-box p3 pointer bg-bc-blue">#takeyourplaceatthetable</div>
    <div class="full-width font-size-0" id="instafeed"></div>
    <a id="load-more" class="full-width block center h1 bc-white border-box p3 pointer bg-bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'See more stories']);"><?= $pages->find('one-team')->moreinstagram() ?></a>
  <?php endif ?>
<?php snippet('footer') ?>
