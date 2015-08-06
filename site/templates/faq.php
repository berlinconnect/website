<?php snippet('header') ?>
<?php snippet('menu', array('color' => 'dark-gray')) ?>

<div class="sm-pt1 sm-pb4 md-py4 container clearfix ">
  <header class="center col-12 sm-col-8 mx-auto mb4">
    <p class="h1 block letter-spacing pb2"><?= $page->herotitle() ?></p>
    <p class="h3 lighter mx-auto col-inline mb3"><?= $page->herotext() ?></p>
    <a href="" class="h5 caps bold inline-block p2 center bg-bc-blue bc-white">Email us your question</a>
  </header>
  <div class="questions grid">
    <?php foreach($page->children()->visible() as $question): ?>
      <div class="col-inline col-12 sm-col-6 px3 grid-item">
        <h5 class="caps"><?php echo $question->title() ?></h5>
        <p class="small justify"><?php echo $question->text() ?></p>
      </div>
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
