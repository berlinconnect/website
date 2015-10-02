<?php snippet('header') ?>
<?php snippet('featured-hero') ?>
<div class="filterAnchor"></div>
<div class="full-width p1 border-box bg-bc-blue filter top-0 left-0 z4">
  <div class="container flex flex-justify filter-group filter-button-group">
    <button class="bg-transparent h5 m0" data-filter="*">Show all</button>
    <?php

    // fetch all tags
    $tags = $page->children()->visible()->pluck('tags', ',', true);


    ?>
    <?php foreach($tags as $tag):
      $tagStripped = str_replace("-"," ",$tag);
    ?>
      <button class="bg-transparent h5 m0" data-filter=".<?= $tag ?>"><?= $tagStripped ?></button>
    <?php endforeach ?>
  </div>
</div>
  <div class="clearfix md-px3 py3 border-box">
    <ul class="relative col-12 mx-auto posts list-reset m0">
      <?php
        $heroPost = $page->children()->visible()->limit(1)->first();
        $slug = $heroPost->slug();
        // $randomNumber is for the images for each post
        $randomNumber = 1;
        foreach($page->children()->visible()->not($slug) as $post):
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
         $('.filterhidden').removeClass('hidden');
     } else {
         $('.filterhidden').addClass('hidden');
     }
  }

  $(function () {
     $(window).scroll(sticky_relocate);
     sticky_relocate();
  });

  </script>

<?php snippet('footer') ?>
