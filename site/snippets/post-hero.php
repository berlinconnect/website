<!-- Typography > Positioning > Layout > Color & Theme > State > Custom -->
<div class="relative full-width pb4 cover-bg center-bg" style="background-image: url(
<?php
if ($page->hasImages()){
  echo $page->images()->first()->url();
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

  <div class="clearfix relative z4 container center mt3 mb4 bc-white">

      <!-- <h5 class="caps inline-block px1 pyhalf m0 rounded mb3">Toolbox</h5> -->
      <h1 class="huge lighter caps letter-spacing m0 px3 py3"><?= $page->title() ?></h1>

  </div>

  <div class="absolute left-0 top-0 full-height full-width bg-light-overlay-dark-gray">

  </div>

</div>
