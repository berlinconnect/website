<?php snippet('header') ?>
<?php snippet('featured-hero') ?>
  <div class="filter">
    <div class="button-group filter-button-group">
      <button data-filter="*">Show all</button>
      <button data-filter=".Message">Messages</button>
      <button data-filter=".Annual-report">Annual Report</button>
      <button data-filter=".Podcast">Podcasts</button>
    </div>
  </div>
  <div class="clearfix md-px3 py3 border-box">
    <ul class="relative col-12 mx-auto posts list-reset m0 bg-dark-gray">
      <?php
        $heroPost = $page->children()->flip()->visible()->limit(1)->first();
        $slug = $heroPost->slug();
        // $randomNumber is for the images for each post
        $randomNumber = 1;
        foreach($page->children()->flip()->visible()->not($slug) as $post):
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
