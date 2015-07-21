<?php snippet('header') ?>
<?php snippet('menu', array('color' => 'dark-gray')) ?>

<div class="py4 container clearfix ">
  <header class=" center col-8 mx-auto mb4">
    <p class="h1 block letter-spacing pb2"><?= $page->title() ?></p>
    <p class="h3 lighter mx-auto col-inline mb3"><?= $page->text() ?></p>
  </header>
  <div class="questions grid">
    <?php foreach($page->children()->visible() as $event): ?>
      <!-- $date = $event->date('M'); ?> -->
      <!-- $ if ($date == date('M')): ?> -->
        <div class="col col-3 event-container inline-block border-box p1 mt2">
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
    <?php endforeach ?>  -->
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