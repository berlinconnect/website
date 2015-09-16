<?php snippet('header') ?>
  <?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>
    <div class="full-width bg-bc-off-white py4">
      <div class="container clearfix center">
        <p class="caps h4 regular tiny-justify sm-justify md-center letter-spacing-1 px3 line-height-3 m0 bc-blue"><?= $page->overview() ?></p>
        <div class="py3 divider md-show">
          <div class="col-inline col-1 mx-auto border-top border-light-gray">
          </div>
        </div>

        <?php $hwacols = 'col col-12 sm-col-4 mb4 sm-mb0' ?>
        <div class="col col-12 mt2 md-show border-box">
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
        <?php foreach($page->find('toolbox')->children()->filterBy('size', 'featured', ',')->visible()->limit(1) as $post): ?>
          <?php snippet('post', array('post' => $post)) ?>
        <?php endforeach ?>
        <?php foreach($page->find('toolbox')->children()->filterBy('size', 'small', ',')->visible()->limit(2) as $post): ?>
          <?php snippet('post', array('post' => $post)) ?>
        <?php endforeach ?>
        <?php foreach($page->find('toolbox')->children()->filterBy('size', 'normal', ',')->visible()->limit(1) as $post): ?>
          <?php snippet('post', array('post' => $post)) ?>
        <?php endforeach ?>

      </ul>
    </div>

    <div class="center mt3">
      <a class="button bg-bc-blue py2 px4" href='<?php echo $page->find('toolbox')->url() ?>' onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Explore the tooltox']);">See More</a>
    </div>

      <div class="container py4 clearfix">
        <div class="center pt3">
          <h1 class="m0 mb2 caps lighter"><?= $page->eventsectiontitle() ?></h1>
        </div>
        <div class="questions grid">

          <?php

          // nested menu
          $events = $pages->find('calendar')->children()->filterBy('tag', 'enlarge', ',')->visible();

          // only show the menu if items are available
          if($events->count()):

          ?>
            <?php foreach($events as $event): ?>

              <?php snippet('single-event', array('event' => $event)) ?>

            <?php endforeach ?>

          <?php else: ?>

            <div class="center mx-auto col-12 sm-col-6 bg-bc-off-white p3 mt4 mb3">
              <p class="m0">No upcoming sessions or workshops.</p>
            </div>

          <?php endif ?>
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
