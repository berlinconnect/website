<?php snippet('header') ?>
<?php snippet('featured-hero') ?>

  <div class="clearfix md-px3 py3 border-box">
    <ul class="relative col-12 mx-auto posts list-reset m0 bg-dark-gray">
      <div class="filler">
      </div>
      <?php
        $heroPost = $page->children()->flip()->visible()->limit(1)->first();
        $slug = $heroPost->slug();
        foreach($page->children()->visible()->not($slug) as $post):
      ?>
        <?php snippet('post', array('post' => $post)) ?>
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
