<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => 'bg-fixed', 'bgPosition' => 'center-bg')) ?>

<div class="tiny-py0 md-py0 lg-py4 container clearfix">
  <div class="questions grid">
    <?php foreach($page->children()->visible() as $event): ?>
      <!-- $date = $event->date('M'); ?> -->
      <!-- $ if ($date == date('M')): ?> -->
        <div class="xsm-col col-12 sm-col-6 lg-col-3  event-container inline-block border-box p1 mt2">
        <!-- IMPORTANT: the image in the content folder/for every event must be named 1.jpg!!!!!!! -->
          <div class="relative drop-shadow event bg-light-gray p1 width-bg top-bg" <?php if($image = $event->image('1.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
            <div class="date align-left bc-white ml1">
              <h4 class="caps heavy m0 mt2 line-height-0"><?php echo $event->date('M') ?></h4>
              <h2 class="caps bold m0"><?php echo $event->date('d') ?></h2>
            </div>
            <div class="bg-faded-bc-white absolute full-width border-box bottom-0 left-0">
              <div class="p2">
                <h5 class="m0 caps mb1"><?php echo $event->title() ?></h5>
                <p class="small light-gray m0"><?php echo $event->text() ?></p>
              </div>
              <div class="bg-bc-off-white px2 py1">
                <a class='dark-gray' href='<?php echo $event->googlemapslink() ?>'><img src="../images/ui/location.svg" width="8px" class="mr1"><h6 class="caps inline-block m0"><?php echo $event->location() ?></h6></a>
              </div>
            </div>
          </div>
        </div>
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
