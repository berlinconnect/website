<div class="full-width py4 px3 bg-dark-gray bc-off-white border-box">
  <div class="clearfix mt2 mb3">
    <div class="col col-2">
      <img class="inline-block mr2 vm" src="../images/logo/light-bc-white.svg" width="70px"/>
    </div>
    <div class="col-right col-3">
      <p>
        Berlin Christian Life Centre e.V.<br>
        Weinbergsweg 24M<br>
        10119 Berlin
      </p>
    </div>
    <div class="col-right col-3">
      <p>
        +49 (0) 174 3463491<br>
        hello@myberlinconnect.de<br>
        myberlinconnect.de
      </p>
    </div>
    <div class="col-right col-3">
      <p>
        © Berlin Connect 2015.<br>
        All rights reserved<br>
        Privacy Policy
      </p>
    </div>
    <div class="hidden col-right col-9 mt3">
      <ul class="caps m0 list-reset">
        <?php
            // main menu items
            $items = $pages->not('error','home');
            // only show the menu if items are available
            if($items->count()):
          ?>
          <?php foreach($items as $item): ?>
            <li class="inline-block mr3">
              <a href="<?= $item->url() ?>" class="h5 regular light-gray">
                <?= $item->title() ?>
              </a>
            </li>
          <?php endforeach ?>

          <?php endif ?>
        </ul>
    </div>
</div>

<?php echo js('js/libs/jquery.js') ?>
<?php echo js('js/plugins/adaptiveBackgrounds.js') ?>
<?php echo js('js/plugins/wow.js') ?>

<?php if($page->id() == 'new-to-bc'): ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $.adaptiveBackground.run();
      var wow = new WOW(
        {
          boxClass:     'wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       300,          // distance to the element when triggering the animation (default is 0)
          mobile:       true,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          }
        }
      );
      wow.init();
    });
  </script>
<?php endif ?>


</body>
</html>