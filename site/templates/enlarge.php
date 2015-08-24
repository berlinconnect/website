<?php snippet('header') ?>
  <?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>
    <div class="full-width bg-bc-off-white py4">
      <div class="container clearfix center">
        <p class="caps h4 regular tiny-justify sm-justify md-center letter-spacing-1 px3 line-height-3 m0 bc-blue"><?= $page->overview() ?></p>
        <div class="py3 divider md-show">
          <div class="col-inline col-1 mx-auto border-top border-light-gray">
          </div>
        </div>

        <a href="/new-to-bc" class="button inline-block md-hide mt3 h5 caps bg-bc-blue bc-white bold p2" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Go to new to bc on mobile']);"><?= $page->readmore() ?></a>

        <?php $hwacols = 'col col-12 sm-col-4 mb4 sm-mb0' ?>
        <div class="col col-12 mt2 md-show border-box">
          <div class="<?= $hwacols ?> center">
            <h5 class="caps"><?= $page->discovertitle() ?></h5>
            <p class="h4 regular px1 mb3"><?= $page->discovertext() ?></p>
          </div>
          <div class="<?= $hwacols ?> center">
            <h5 class="caps"><?= $page->lifetitle() ?></h5>
            <p class="h4 regular px1 mb3 mid-gray"><?= $page->lifetext() ?></p>
          </div>
          <div class="<?= $hwacols ?> center">
            <h5 class="caps"><?= $page->mybibletitle() ?></h5>
            <p class="h4 regular px1 mb3"><?= $page->mybibletext() ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container py4">
      <div class="center">
        <h1 class="m0 caps lighter"><?= $page->toolboxtitle() ?></h1>
        <p class="h3 regular px1 border-box col-inline col-12 sm-col-10 md-col-9"><?= $page->toolboxtext() ?></p>
      </div>
    </div>
    <div class="posts clearfix">
      <?php foreach($page->find('toolbox')->children()->visible()->limit(4) as $post): ?>
        <div class="relative post <?= $post->size() ?> <?= $post->category() ?> overflow-hidden">
          <span class="h6 bold caps absolute left-0 top-0 mt2 ml2 bc-white p1 py2 line-height-0 bg-bc-<?= $post->color() ?> z4 "><?= $post->tag() ?></span>
          <div class="absolute top-0 left-0 bottom-0 right-0 cover-bg center-bg bg-image" style="background-image: url(<?= $post->images()->first()->url(); ?>)"></div>
          <div class="table left-0 top-0 absolute full-height bg-overlay-dark-gray center z2">
            <div class="table-cell px4 md-px2 vm bc-white">
              <h3 class="lighter mb0"><?= $post->title() ?></h3>
              <p class="m0 mt1 description">
                <?= $post->text()->excerpt(150) ?>
              </p>
              <div class="mx-auto col-inline col-2 mt3 pb3 border-top border-bc-white">
              </div>
              <p class="small">
                by <span class="caps bold"><?= $post->author() ?></span>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>

    <?php snippet('events') ?>

    <script type="text/javascript">

    var elem = document.querySelector('.posts');
    var iso = new Isotope( elem, {
    // options
      itemSelector: '.post',
      layoutMode: 'packery'
    });

    </script>

<?php snippet('footer') ?>
