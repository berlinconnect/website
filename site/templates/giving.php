<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>

<div class="container py4">
  <div class="clearfix">

    <div class="col-9 tiny-col-12 xsm-col-12 tiny-px1 xsm-px2 sm-px3 border-box mx-auto">
      <div class="center mb3">
      <h3 class="caps lighter m0 mb1 bc-blue">All day long he craves for more, but the righteous give without sparing.</h3>
      <p class="m0 light-gray">— Proverbs 21:25</p>
      </div>
      <div class="justify mb3"><?= $page->text()->kirbytext() ?></div>
      <div class="col col-12 sm-col-6 pr2">
        <h5 class="caps">Online Giving</h5>
        <p class="small justify">Online giving is a quick and easy way to give. Click on the button below which will take you to our payment system and complete the online form with your details.</p>
        <a href="" class="h5 caps bold p2 block center bg-bc-blue bc-white" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Give Online']);">Give Online</a>
        <p class="small mt2 light-gray italic">If you have any queries with regards to your giving please call 0207 384 9200 to speak to someone in accounts or email giving@hillsong.co.uk</p>
      </div>
      <div class="col-right col-12 sm-col-6 sm-pl2">
        <h5 class="caps">Standind Order</h5>
        <p class="small justify">The most effective and convenient way to give is by regular standing order. Decide how much you want to give, set it up, and let your giving take care of itself each month.</p>
        <p class="small bold">
          Berlin Christian Life Centre e.V.<br>
          Commerzbank Berlin<br>
          DE07 1204 0000 0623 4595 00<br>
          COBADEFFXXX
        </p>
        <p class="small light-gray italic">
          Alternatively you can download a standing order form below and when completed you can put it in the offering container during our services or send it in.
        </p>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
