  <div class="full-width py4 px3 bg-dark-gray bc-off-white border-box">
    <div class="clearfix mt2 mb3 tiny-center sm-center md-left font-size-0">
      <div class="mx-auto col-2 sm-col-12 sm-center">
        <img class="inline-block  mb3 vm" src="../images/logo/light-bc-white.svg" width="70px"/>
      </div>
      <div class="col-inline col-12  sm-col-12 lg-col-4 md-center">
        <p>
          © Berlin Connect 2015.<br>
          All rights reserved<br>
          <a href="" class="bc-white">Privacy Policy</a>
        </p>
      </div>
      <div class="col-inline col-12 sm-col-12 lg-col-4 md-center">
        <p>
          Questions? Call Conny:<br>
          +49 (0) 174 3463491<br>
          conny@berlinclc.de<br>
          myberlinconnect.de
        </p>
      </div>
      <div class="col-inline col-12 sm-col-12 lg-col-4 md-center">
        <p>
          <?= $site->churchaddress()?>
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
        clientId: 'ca090230b9b241d79c684fc7f76b89d8',
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

</body>
</html>
