<button class="fixed bg-faded-dark-gray z3 pill navigation-button no-select animated fadeInRightBig" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Navigation Hamburger']);">
  <div class="hamburger absolute">
    <span class="block bg-bc-white bar topPosition"></span>
    <span class="block bg-bc-white bar middlePosition"></span>
    <span class="block bg-bc-white bar bottomPosition"></span>
  </div>
</button>
<div  class="full-width full-height fixed top-0 left-0 border-box sidebar-container behind">
  <nav class="absolute right-0 full-height border-box py3 bg-dark-gray sidebar">
    <div>
      <ul class="list-reset mt4 mb2">
        <?php foreach($pages->visible() as $item): ?>
        <li class="<?php e($item->isOpen(), 'active') ?>">
          <a class="px3 py1 block h5 caps light-gray <?php e($item->isOpen(), 'active') ?>" href="<?php echo $item->url() ?>" onclick="_gaq.push(['_trackEvent', 'Links', 'Clicked', 'Sidebar <?php echo $item->uid() ?>']);"><?php echo html($item->title()) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
      <div class="px3">
        <div class="py2">
          <?= snippet('social', array('iconSize' => '24px')) ?>
        </div>
        <?= snippet('languageSwitcher') ?>
      </div>
    <div>
  </nav>
</div>
