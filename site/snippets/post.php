<li class="post <?= $post->size() ?> <?= $post->tags() ?> bg-dark-gray overflow-hidden animted wow fadeIn">
  <div class="flex flex-center full-height full-width absolute z4 content-container">

    <div class="flex-auto relative z4 center bc-white content">
      <h3 class="lighter mb0"><?= $post->title() ?></h3>
      <p class="m0 mt1 description">
        <?= $post->text()->excerpt(150) ?>
      </p>
      <p class="small mt2">
        by <span class="caps bold"><?= $post->author() ?></span>
      </p>
    </div>
    
  </div>

  <span class="h6 bold caps absolute left-0 top-0 mt2 ml2 bc-white px1 py2 line-height-0 bg-bc-<?= $post->color() ?> z4"><?= $post->category() ?></span>

  <div class="absolute full-height left-0 top-0 full-width cover-bg center-bg bg-image" style="background-image: url(
  <?php 
  if ($post->hasImages()){
    echo $post->images()->first()->url();
  }
  else{
    echo $page->image('default_post.jpg')->url();
  } 
  ?>
  )"></div>

  <div class="absolute full-height left-0 top-0 full-width  cover-bg bg-overlay-dark-gray"></div>

</li>
