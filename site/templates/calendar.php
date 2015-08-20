<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => 'bg-fixed', 'bgPosition' => 'center-bg')) ?>

<div class="tiny-py0 md-py0 lg-py4 container clearfix">
  <div class="questions grid">
    <?php foreach($page->children()->visible() as $event): ?>
      <!-- $date = $event->date('M'); ?> -->
      <!-- $ if ($date == date('M')): ?> -->

        <?php snippet('single-event', array('event' => $event)) ?>
      <!-- endif ?>  -->
    <?php endforeach ?>
  </div>
</div>

<script type="text/javascript">

  var elem = document.querySelector('.grid');
  var msnry = new Masonry( elem, {
    // options
    itemSelector: '.grid-item',
  });

  // element argument can be a selector string
  //   for an individual element
  var msnry = new Masonry( '.grid', {
    // options
  });

</script>

<?php snippet('footer') ?>
