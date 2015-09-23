<?php snippet('header') ?>
<?php snippet('featured-hero') ?>
  <div class="filterAnchor"></div>
  <div class="full-width p1 border-box bg-bc-blue filter top-0 left-0">
  <div class="container flex flex-justify filter-group filter-button-group">
    <button class="bg-transparent h4 m0" data-filter="*">Show all</button>
    <button class="bg-transparent h4 m0" data-filter=".message">Messages</button>
    <button class="bg-transparent h4 m0" data-filter=".podcast">Podcasts</button>
    <button class="bg-transparent h4 m0" data-filter=".discovery-notes">Discovery Notes</button>
    <button class="bg-transparent h4 m0" data-filter=".my-bible">My Bible</button>
    <button class="bg-transparent h4 m0" data-filter=".annual-report">Annual Report</button>
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

  // filter items on button click
  $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $('.filter-button-group button').removeClass('active');
    $(this).addClass('active');
    $container.isotope({ filter: filterValue });
  });

  function sticky_relocate() {
     var window_top = $(window).scrollTop();
     var div_top = $('.filterAnchor').offset().top;
     if (window_top > div_top) {
         $('.filter').addClass('fixed');
     } else {
         $('.filter').removeClass('fixed');
     }
  }

  $(function () {
     $(window).scroll(sticky_relocate);
     sticky_relocate();
  });

  </script>

<?php snippet('footer') ?>
