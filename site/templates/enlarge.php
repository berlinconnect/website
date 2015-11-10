<?php snippet('header') ?>
  <?php snippet('image-hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>
    <div class="full-width bg-bc-off-white py4">
      <div class="container clearfix center">
        <p class="caps h4 regular tiny-justify sm-justify md-center letter-spacing-1 px3 line-height-3 m0 bc-blue"><?= $page->overview() ?></p>

        <?php $hwacols = 'col col-12 sm-col-4 mb4 sm-mb0' ?>

        <div class="col col-12 mt2 md-show border-box mt4">
          <div class="<?= $hwacols ?> center">
            <div class="bubble-graphic inline-block bg-bc-orange pill bg-center" style="background-image:url('../images/ui/discover.svg')">
            </div>
            <h5 class="caps"><?= $page->discovertitle() ?></h5>
            <p class="h4 regular px1 mb3"><?= $page->discovertext() ?></p>
          </div>
          <div class="<?= $hwacols ?> center">
            <div class="bubble-graphic inline-block bg-bc-green pill" style="background-image:url('../images/ui/lifeskills.svg')">
            </div>
            <h5 class="caps"><?= $page->lifetitle() ?></h5>
            <p class="h4 regular px1 mb3 mid-gray"><?= $page->lifetext() ?></p>
          </div>
          <div class="<?= $hwacols ?> center">
            <div class="bubble-graphic inline-block bg-bc-blue pill" style="background-image:url('../images/ui/bible.svg')">
            </div>
            <h5 class="caps"><?= $page->mybibletitle() ?></h5>
            <p class="h4 regular px1 mb3"><?= $page->mybibletext() ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container py4">
      <div class="center">
        <h1 class="m0 caps lighter"><?= $page->toolboxtitle() ?></h1>
        <p class="h3 regular px1 border-box col-inline col-12 sm-col-10 md-col-9"><?= $page->toolboxtext() ?></p>
      </div>
    </div>
    <div class="clearfix md-px3 border-box">
      <ul class="relative col-12 mx-auto posts list-reset m0 bg-dark-gray">
        <div class="filler">
        </div>
        <?php
          // $randomNumber is for the images for each post
          $randomNumber = 1;
        ?>
        <?php foreach($page->find('toolbox')->children()->sortBy('date', 'desc')->filterBy('size', 'featured', ',')->visible()->limit(1) as $post): ?>
          <?php
            // increase $randomNumber by one to show another image next time
            $randomNumber = $randomNumber + 1;
            // if $randomNumber is over 13, then repeat all images again
            if ($randomNumber > 13) {
              $randomNumber = 1;
            }
          ?>
          <?php snippet('post', array('post' => $post, 'randomNumber' => $randomNumber)) ?>
        <?php endforeach ?>
        <?php foreach($page->find('toolbox')->children()->sortBy('date', 'desc')->filterBy('size', 'small', ',')->visible()->limit(2) as $post): ?>
          <?php
            // increase $randomNumber by one to show another image next time
            $randomNumber = $randomNumber + 1;
            // if $randomNumber is over 13, then repeat all images again
            if ($randomNumber > 13) {
              $randomNumber = 1;
            }
          ?>
          <?php snippet('post', array('post' => $post, 'randomNumber' => $randomNumber)) ?>
        <?php endforeach ?>
        <?php foreach($page->find('toolbox')->children()->sortBy('date', 'desc')->filterBy('size', 'normal', ',')->visible()->limit(1) as $post): ?>
          <?php
            // increase $randomNumber by one to show another image next time
            $randomNumber = $randomNumber + 1;
            // if $randomNumber is over 13, then repeat all images again
            if ($randomNumber > 13) {
              $randomNumber = 1;
            }
          ?>
          <?php snippet('post', array('post' => $post, 'randomNumber' => $randomNumber)) ?>
        <?php endforeach ?>

      </ul>
    </div>

    <div class="center mt3">
      <a class="button bg-bc-blue py2 px4" href='<?php echo $page->find('toolbox')->url() ?>' onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Explore the tooltox']);">See More</a>
    </div>

    <div class="container clearfix mt4 mb4">
      <div class="center">
        <h1 class="m0 mb2 caps lighter"><?= $page->eventsectiontitle() ?></h1>
      </div>
      <div class="flex flex-wrap center flex-justify full-width clearfix">
        <?php
          $calendarTag = $page->id(); foreach($pages->find('calendar')->children()->visible()->filterBy('tag', $calendarTag, ',')->sortBy('date', 'asc') as $event): ?>
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

    <script>

      // init Isotope
      var $container = $('.posts').isotope({
        itemSelector: '.post',
        layoutMode: 'packery',
      });

      // bind filter button click
      $('#filters').on( 'click', 'li', function() {
        var filterValue = $( this ).attr('data-filter');
        $container.isotope({ filter: filterValue });
      });

      // change is-checked class on buttons
      $('.filter-group').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', 'li', function() {
          $buttonGroup.find('.is-checked').removeClass('is-checked');
          $( this ).addClass('is-checked');
        });
      });

    </script>

<?php snippet('footer') ?>
