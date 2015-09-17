<!-- Typography > Positioning > Layout > Color & Theme > State > Custom -->
<?php foreach($page->children()->visible()->limit(1) as $post): ?>
<div class="relative full-width pb4 cover-bg center-bg" style="background-image: url(<?php echo $post->images()->first()->url(); ?>)" data-adaptive-background data-ab-css-background>

  <?php snippet('menu', array('color' => 'bc-white')) ?>

  <div class="clearfix relative z4 container center mt3 mb3 py4 bc-white">

      <!-- <h5 class="caps inline-block px1 pyhalf m0 rounded mb3">Toolbox</h5> -->

      <h2 class="huge lighter caps letter-spacing m0 px3"><?= $post->title() ?></h2>

      <p class="small mt2">
        by <span class="caps bold"><?= $post->author() ?></span>
      </p>

      <a href="<?= $post->url() ?> " class="h5 px3 py2 mt3 caps bg-bc-white gray inline-block">Read More</a>

  </div>

  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray">

  </div>

</div>
<?php endforeach ?>
