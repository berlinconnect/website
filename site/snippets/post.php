<li class="post <?= $post->size() ?> <?= $post->tags() ?> bg-dark-gray overflow-hidden animted wow fadeIn">

  <span class="h6 bold caps absolute left-0 top-0 mt2 ml2 bc-white px1 py2 line-height-0 bg-bc-<?= $post->color() ?> z4"><?= $post->category() ?></span>

  <div class="absolute full-height full-width cover-bg center-bg bg-image" style="background-image: url(<?= $post->images()->first()->url(); ?>)"></div>

  <div class="absolute full-height full-width  cover-bg bg-overlay-dark-gray"></div>

  <div class="table m-autoe full-height full-width  font-size-0 absolute center z2 content-container">

    <div class="table-cell vm bc-white content">
      <h3 class="lighter mb0"><?= $post->title() ?></h3>
      <p class="m0 mt1 description">
        <?= $post->text()->excerpt(150) ?>
      </p>
      <p class="small mt2">
        by <span class="caps bold"><?= $post->author() ?></span>
      </p>
    </div>

  </div>
</li>
