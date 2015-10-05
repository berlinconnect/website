<!-- Typography > Positioning > Layout > Color & Theme > State > Custom -->
<?php foreach($page->children()->visible()->sortBy('date', 'desc')->limit(1) as $post): ?>
<div class="flex flex-center relative full-width cover-bg center-bg general-hero" style="background-image: url(
<?php
if ($post->hasImages()){
  echo $post->images()->first()->url();
}
else{
  $randomNumber = 1;
  $defaultImage = "default_{$randomNumber}.jpg";
  echo $pages->find('enlarge')->find('toolbox')->image($defaultImage)->url();
  // echo $pages->find('enlarge')->find('toolbox')->image('default_1.jpg')->url();
}
?>
)
" data-adaptive-background data-ab-css-background>

  <?php snippet('menu', array('color' => 'bc-white')) ?>

  <div class="flex-auto z4 container center bc-white">

      <h1 class="huge lighter caps letter-spacing m0 px3"><?= $post->title() ?></h1>

      <p class="small mt2">
        by <span class="caps bold"><?= $post->author() ?></span>
      </p>

      <?php if($post->tags() == 'book-recommendation'): ?>
        <a href="<?= $post->link() ?> " class="h5 px3 py2 mt3 caps bg-bc-white gray inline-block">View Book</a>
      <?php endif ?>

      <?php if($post->tags() == 'podcast'): ?>
        <a href="<?= $post->link() ?> " class="h5 px3 py2 mt3 caps bg-bc-white gray inline-block">Listen</a>
      <?php endif ?>

      <?php if (strlen($post->link()) == 0): ?>
        <a href="<?= $post->url() ?> " class="h5 px3 py2 mt3 caps bg-bc-white gray inline-block">Read More</a>
      <?php endif ?>

  </div>

  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray z3">

  </div>

</div>
<?php endforeach ?>
