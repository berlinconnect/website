
<div class="overlay z4">

</div>
<div class="fixed bg-bc-white z4 animated box-sizing notice minified"  onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Noticed opened']);">
  <div class="clearfix heavy-drop-shadow">
    <div class="relative header bg-bc-blue bc-white overflow-hidden pointer">
      <div class="heading clearfix p2">
        <h6 class="m0 col col-10 inline-block vm"><span class="h6 phalf mr1 line-height-0 bg-bc-white bc-blue">New</span><?= $pages->find('notice')->title() ?></h6>
        <h6 class="m0 col col-2 regular right-align inline-block vm"><?= $pages->find('notice')->read() ?></h6>
      </div>
      <div class="absolute full-height full-width cover-bg top-bg header-image z1" style="background-image:url('<?php echo $pages->find('notice')->images()->first()->url(); ?>');"></div>
    </div>
    <div class="p3 center">
      <h5 class="mt0"><?= $pages->find('notice')->title() ?></h5>
      <p class="small mb0">
        <?= $pages->find('notice')->noticetext() ?>
      </p>
    </div>
    <div class="buttons">
      <a class="button col col-6 bg-bc-off-white center gray block p2 caps h5 close-notice" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Dismiss notice']);"><?= $pages->find('notice')->dismiss() ?></a>
      <a href="<?= $pages->find('notice')->link() ?>" class="button col col-6 bg-bc-blue center bc-white block p2 caps h5" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Notice CTA']);"><?= $pages->find('notice')->learnmore() ?></a>
    </div>
  </div>
</div>
