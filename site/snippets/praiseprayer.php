<div class="font-size-0">
  <a href="<?= $page->prayerurl() ?>" class="praiseprayer relative col-inline col-12 sm-col-6 bc-white center py2 center-bg cover-bg" <?php if($image = $page->image('prayer.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
    <div class="py4 relative z1">
      <h2 class="lighter mt0 mb0 tiny-mb0 line-height-0">Prayer Requests</h2>
    </div>
  </a>
  <a href="<?= $page->praiseurl() ?>" class="praiseprayer relative col-inline col-12 sm-col-6 bc-white center py2 center-bg cover-bg" <?php if($image = $page->image('praise.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
    <div class="py4 relative z1">
      <h2 class="lighter mt0 mb0 tiny-mb0 line-height-0">Praise Report</h2>
    </div>
  </a>
</div>
