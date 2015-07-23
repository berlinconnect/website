<div class="fixed bg-faded-dark-gray z4 pill navigation-button no-select animated fadeInRightBig">
  <div class="hamburger absolute">
    <span class="block bg-bc-white bar topPosition"></span>
    <span class="block bg-bc-white bar middlePosition"></span>
    <span class="block bg-bc-white bar bottomPosition"></span>
  </div>
</div>
<div  class="full-width full-height fixed top-0 left-0 border-box sidebar-container behind">
  <nav class="absolute right-0 full-height border-box py3 bg-dark-gray sidebar">
    <div>
      <ul class="list-reset mt4 mb2">
        <?php foreach($pages->visible() as $item): ?>
        <li class="<?php e($item->isOpen(), 'active') ?>"><a class="px3 py1 block h5 caps light-gray <?php e($item->isOpen(), 'active') ?>" href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
        <?php endforeach ?>
      </ul>
      <div class="px3">
        <div class="py3">
          <a class="display-inline mr2">
            <img src="../images/social/facebook.svg" width="20px">
          </a>
          <a class="display-inline mr2">
            <img src="../images/social/twitter.svg" width="26px">
          </a>
          <a class="display-inline">
            <img src="../images/social/instagram.svg" width="20px">
          </a>
        </div>
        <?= snippet('languageSwitcher') ?>
      </div>
    <div>
  </nav>
</div>