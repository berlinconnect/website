<!-- Typography > Positioning > Layout > Color & Theme > State > Custom -->
<div class="relative full-width videohero">

  <?php snippet('menu', array('color' => 'bc-white')) ?>

  <div class="videohero-content flex flex-justify full-height flex-center home-hero cover-bg" style="background-image: url(<?php echo $page->images()->first()->url(); ?>)">

    <div class="clearfix relative flex-auto z4 center bc-white">

        <h1 class="huge lighter caps letter-spacing m0">
          <?= $page->herotitle() ?>
        </h1>

        <p class="h3 regular col-inline tiny-col-12 md-col-9 lg-col-7 mx-auto m0 px1 border-box"><?= $page->herotext() ?></p>

        <div class="py2 mb2">
          <div class="mx-auto col-inline col-1 border-top border-bc-white">
          </div>
        </div>
        <!-- divider -->
        <?= snippet('social', array('iconSize' => '30px')) ?>
    </div>

    <div class="absolute left-0 top-0 full-height muted full-width bg-light-overlay-dark-gray z3"></div>

    <?php if ($page->videoheader() == "videoYES") { ?>
        <div class="video-container sm-show">
          <video class="" autoplay muted loop poster="<?= $site->url() ?>/video/bg.jpg" id="bgvid">
            <source src="<?= $site->url() ?>/video/bg.mp4" type="video/mp4">
            <source src="<?= $site->url() ?>/video/bg.ogv" type="video/ogg">
          </video>
        </div>
    <?php } ?>

  </div>

</div>

<script>
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
   $('video').addClass('display-none');
  }
</script>
