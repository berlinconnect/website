  <div class="full-width py4 px3 bg-dark-gray bc-off-white border-box">
    <div class="clearfix mt2 mb3 tiny-center sm-left md-left font-size-0">
      <div class="mx-auto col-2 sm-col-12 sm-center">
        <img class="inline-block  mb3 vm" src="<?php echo $site->url() ?>/images/logo/light-bc-white.svg" width="70px"/>
      </div>
      <div class="col-inline col-12  sm-col-12 lg-col-4 md-center">
        <p>
          <?= $site->copyright()?>
          <br>
          <a href="/imprint" class="bc-white"><?= $site->imprintlink()?></a>
        </p>
      </div>
      <div class="col-inline col-12 sm-col-12 lg-col-4 md-center">
        <p>
          <?= $site->contactquestions()?>
        </p>
      </div>
      <div class="col-inline col-12 sm-col-12 lg-col-4 md-center">
        <p>
          <?= $site->hubaddress()?>
        </p>
      </div>
    </div>
  </div>
</div>

<?php echo js('js/plugins/adaptiveBackgrounds.js') ?>
<?php echo js('js/plugins/wow.js') ?>
<?php echo js('js/components/sidebar.js') ?>
<?php echo js('js/components/notice.js') ?>
<?php echo js('js/plugins/instafeed.js') ?>

<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>

<?php if($page->id() == 'new-to-bc'): ?>
  <script type="text/javascript">
    $(document).ready(function(){
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
    $(window).load(function() {
      $.adaptiveBackground.run();
    });
  </script>
<?php endif ?>
<?php if($page->id() == 'summer'): ?>
  <script type="text/javascript">

    var loadButton = document.getElementById('load-more');
    var feed = new Instafeed({
        after: function() {
          // disable button if no more results to load
          if (!this.hasNext()) {
            $('#load-more').addClass('hidden');
          }
        },

        get: 'tagged',
        tagName: 'summermomentum',
        clientId: '32ffa2236fc042c1a8a8f2f3e9646ecd',
        accessToken: '1529396.1677ed0.a4fba16666414e11b6a0985b9cb01c0d',
        resolution: 'standard_resolution',
        sortBy: 'most-recent',
        links: 'false',
        template: '<div class="relative overflow-hidden col-inline col-12 xsm-col-6 sm-col-4 md-col-3 image"><div class="absolute caption">{{caption}}</div><img src="{{image}}" /></div>'
    });

    loadButton.addEventListener('click', function() {
      feed.next();
    });

    feed.run();
  </script>
<?php endif ?>
<?php if($page->id() == 'one-team'): ?>
  <script type="text/javascript">

    var loadButton = document.getElementById('load-more');
    var feed = new Instafeed({
        after: function() {
          // disable button if no more results to load
          if (!this.hasNext()) {
            $('#load-more').addClass('hidden');
          }
        },

        get: 'tagged',
        tagName: 'bcteambesties',
        clientId: '32ffa2236fc042c1a8a8f2f3e9646ecd',
        accessToken: '1529396.1677ed0.a4fba16666414e11b6a0985b9cb01c0d',
        resolution: 'standard_resolution',
        sortBy: 'most-recent',
        links: 'false',
        template: '<div class="relative overflow-hidden col-inline col-12 xsm-col-6 sm-col-4 md-col-3 image"><div class="absolute caption">{{caption}}</div><img src="{{image}}" /></div>'
    });

    loadButton.addEventListener('click', function() {
      feed.next();
    });

    feed.run();
  </script>
<?php endif ?>
<?php if($page->id() == 'changeThisLater'): ?>
  <script type="text/javascript">

    var loadButton = document.getElementById('load-more');
    var feed = new Instafeed({
        after: function() {
          // disable button if no more results to load
          if (!this.hasNext()) {
            $('#load-more').addClass('hidden');
          }
        },

        get: 'tagged',
        userId: 'YOUR_USER_ID'
        tagName: 'takeyourplaceatthetable',
        clientId: '32ffa2236fc042c1a8a8f2f3e9646ecd',
        accessToken: '1529396.1677ed0.a4fba16666414e11b6a0985b9cb01c0d',
        resolution: 'standard_resolution',
        sortBy: 'most-recent',
        links: 'false',
        template: '<div class="relative overflow-hidden col-inline col-12 xsm-col-6 sm-col-4 md-col-3 image"><div class="absolute caption">{{caption}}</div><img src="{{image}}" /></div>'
    });

    loadButton.addEventListener('click', function() {
      feed.next();
    });

    feed.run();
  </script>
<?php endif ?>

<script>
  function externalLinks() {
    for(var c = document.getElementsByTagName("a"), a = 0;a < c.length;a++) {
      var b = c[a];
      b.getAttribute("href") && b.hostname !== location.hostname && (b.target = "_blank")
    }
  }
  ;
  externalLinks();
</script>

</body>
</html>
