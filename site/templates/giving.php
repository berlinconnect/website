<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>

<div class="container py4">
  <div class="clearfix">

    <div class="col-9 tiny-col-12 xsm-col-12 tiny-px1 xsm-px2 sm-px3 border-box mx-auto">
      <div class="center mb3">
      <h3 class="caps lighter m0 mb1 bc-blue"><?= $page->verse() ?></h3>
      <p class="m0 light-gray">— <?= $page->verselocation() ?></p>
      </div>
      <div class="justify mb3"><?= $page->text()->kirbytext() ?></div>
      <div class="col col-12 sm-col-6 pr2">
        <h5 class="caps"><?= $page->onlinegivingtitle() ?></h5>
        <p class="small justify"><?= $page->onlinegivingtext() ?></p>
        
        <!-- Pass on giver variable, for google analytics tracking -->
        <?php snippet('paypal', array('giver' => '')) ?>
        
        <p class="small mt2 light-gray italic"><?= $page->onlinegivingnote() ?></p>
      </div>
      <div class="col-right col-12 sm-col-6 sm-pl2">
        <h5 class="caps"><?= $page->standingordertitle() ?></h5>
        <p class="small justify"><?= $page->standingordertext() ?></p>
        <h5 class="regular m0 line-height-2">
          <span class="bold">Account Name:</span> Berlin Christian Life Centre e.V.<br/>
          <span class="bold">Bank:</span>Commerzbank Berlin<br/>
          <span class="bold">IBAN:</span> DE07 1204 0000 0623 4595 00<br/>
          <span class="bold">SWIFT Code (BIC):</span> COBADEFFXXX<br/>
        </h5>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
