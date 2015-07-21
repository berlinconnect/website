<div class="clearfix full-width menu">
  <div class="p3">
    <div class="font-size-0">
      <div class="col-inline col-2 vm logo">
        <a href="<?php echo $site->url() ?>"><img src="../images/logo/light-<?= $color ?>.svg" width="50px" alt="bc"/></a>
      </div>
      <nav class="right-align col-inline col-10 vm navigation ">
        <ul class="caps bold m0 list-reset pr4">
          <?php
            // main menu items
            $items = $pages->visible();
            // only show the menu if items are available
            if($items->count()):
          ?>
          <?php foreach($items as $item): ?>
            <li class="inline-block mr3">
              <a href="<?= $item->url() ?>" class="h4 regular <?= $color ?>">
                <?= $item->title() ?>
              </a>
            </li>
          <?php endforeach ?>

          <?php endif ?>
        </ul>
      <nav>
    </div>
  </div>
</div>