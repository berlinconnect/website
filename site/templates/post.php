<?php snippet('header') ?>
<?php snippet('post-hero') ?>

  <div class="tiny-py3 xsm-py3 sm-px4 lg-py4 container border-box clearfix">
    <div class="col col-12 md-col-3 tiny-px1 xsm-px2 md-px0 border-box mx-auto sm-mt3">
      <div class="flex flex-start flex-column">
        <div class="mr2">
          <?php if($image = $page->image('author.png')): ?>
            <img src="<?php echo $image->url() ?>" alt="">
          <?php else: ?>
            <img src="<?php echo $pages->find('enlarge')->find('toolbox')->image('author.png')->url() ?>" width="50" alt="">
          <?php endif ?>
        </div>
        <div class="autor flex-auto" ?>
          <p class="small mbhalf light-gray">post by:</p>
          <h5 class=mt0><?= $page->author() ?></h5>
          <p class="small"><?= $page->date('M d, Y') ?></p>
        </div>
      </div>
      <?php if (strlen($page->scriptures()) != 0): ?>
        <div class="scriptures mt2">
          <h5>Key Scriptures</h5>
          <p class="small"><?= $page->scriptures() ?></p>
        </div>
      <?php endif ?>
    </div>
    <div class="col-right col-12 md-col-8 tiny-px1 xsm-px2 md-px0 border-box mx-auto">
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>

<?php snippet('footer') ?>
