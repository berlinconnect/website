<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>

<div class="full-width clearfix">
  <div class="center pt4 tiny-pt2 px3 mt3 mb4 tiny-mt-1 tiny-mb1">
    <iframe src="https://player.vimeo.com/video/139208268?badge=0" width="500" height="210" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
  <div class="tiny-pt2 tiny-mt-1 tiny-mb1 clearfix">
    <div class="col col-12 sm-col-6">
      <img src="<?= $pages->find('h4h2015')->image('giver1.jpg')->url(); ?>">
    </div>
    <div class="col-right col-12 sm-col-6">
      <p class="h2 center light-grey">Faithful Givers</p>
      <p class="center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div>
  </div>
  <div class="tiny-pt2 tiny-mt-1 tiny-mb1 clearfix">
    <div class="col col-12 sm-col-6">
      <p class="h2 center light-grey">Vision Givers</p>
      <p class="center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="col-right col-12 sm-col-6">
      <img src="<?= $pages->find('h4h2015')->image('giver2.jpg')->url(); ?>">
    </div>
  </div>
  <div class="tiny-pt2 tiny-mt-1 clearfix">
    <div class="col col-12 sm-col-6">
      <img src="<?= $pages->find('h4h2015')->image('giver3.jpg')->url(); ?>">
    </div>
    <div class="col-right col-12 sm-col-6">
      <p class="h2 center light-grey">Kingdom Givers</p>
      <p class="center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div>
  </div>
</div>
<div class="full-width clearfix bg-mid-gray bc-white py3">
  <div class="container center py3 tiny-py1">
    <p class="h1 lighter mb3 tiny-mb2">Serve the Lord with gladness.</p>
    <p class="h3 lighter px1 sm-px2 col-inline col-12 md-col-8">Are you considering taking the next step and serving in church? Click the button below, complete the form and we will be in touch with you.</p>
    <div class="mt3">
      <a href="" class="h5 caps bold p2 center bg-bc-white bc-blue" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Sign up for team']);">Sign Up Today</a>
    </div>
  </div>
</div>

<?php snippet('footer') ?>