<?php snippet('header') ?>
<?php snippet('image-hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>

<div class="full-width clearfix">
  <div class="md-p4 bg-dark-gray">
    <div class="center video-wrapper border-box">
      <iframe src="<?= $page->video() ?>" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>

    <div class="flex flex-stretch flex-column md-flex-row mb3 md-mb0">

      <div class="flex flex-center col-12 md-col-6 full-height cover-bg flex-content-stretch center-bg h4h-image py4" style="background-image:url('<?= $page->image('giver1.jpg')->url() ?>');">
        <h1 class="flex-auto center bc-white bold letter-spacing-2 m0 py4"><?= $page->faithfulgivertitle() ?></h1>
      </div>

      <div class="col-12 md-col-6 border-box full-height p2 xsm-p3 lg-p4">

        <p class="h4 regular bc-blue caps line-height-2 m0 mb2"><?= $page->faithfulgiverheader() ?></p>

        <p class="tiny-justify"><?= $page->faithfulgivertext() ?></p>
        
        <!-- Pass on giver variable, for google analytics tracking -->
        <?php snippet('paypal', array('giver' => '')) ?>

        <p class="small mt2 light-gray"><?= $page->completionInfo() ?></p>

        <h5 class="regular m0">
          <span class="bold"><?= $page->accountName() ?>:</span> Berlin Christian Life Centre e.V.<br/>
          <span class="bold">Bank:</span>Commerzbank Berlin<br/>
          <span class="bold">SWIFT Code (BIC):</span> COBADEFF120<br/>
          <span class="bold">IBAN:</span> DE07120400000623459500<br/>
          <span class="bold"><?= $page->reference() ?>:</span> H4TH2015
        </h5>
      </div>

    </div>


    <div class="flex flex-stretch flex-column md-flex-row mb3 md-mb0">

      <div class="flex flex-center col-12 md-col-6 full-height cover-bg flex-content-stretch center-bg h4h-image py4" style="background-image:url('<?= $page->image('giver2.jpg')->url() ?>');">
        <h1 class="flex-auto center bc-white bold letter-spacing-2 m0 py4"><?= $page->visiongivertitle() ?></h1>
      </div>

      <div class="md-flex-first col-12 md-col-6 border-box full-height p2 xsm-p3 lg-p4">

        <p class="h4 regular bc-blue caps line-height-2 m0 mb2"><?= $page->visiongiverheader() ?></p>

        <p class="tiny-justify"><?= $page->visiongivertext() ?></p>

        <!-- Pass on giver variable, for google analytics tracking -->
        <?php snippet('paypal', array('giver' => '')) ?>

        <p class="small mt2 light-gray"><?= $page->completionInfo() ?></p>

        <h5 class="regular m0">
          <span class="bold"><?= $page->accountName() ?>:</span> Berlin Christian Life Centre e.V.<br/>
          <span class="bold">Bank:</span>Commerzbank Berlin<br/>
          <span class="bold">SWIFT Code (BIC):</span> COBADEFF120<br/>
          <span class="bold">IBAN:</span> DE77120400000623459501<br/>
          <span class="bold"><?= $page->reference() ?>:</span> Vision Giver
        </h5>
      </div>

    </div>

    <div class="flex flex-stretch flex-column md-flex-row mb3 md-mb0">

      <div class="flex flex-center col-12 md-col-6 full-height cover-bg flex-content-stretch center-bg h4h-image py4" style="background-image:url('<?= $page->image('giver3.jpg')->url() ?>');">
        <h1 class="flex-auto center bc-white bold letter-spacing-2 m0 py4"><?= $page->kingdomgivertitle() ?></h1>
      </div>

      <div class="col-12 md-col-6 border-box full-height p2 xsm-p3 lg-p4">

        <p class="h4 regular bc-blue caps line-height-2 m0 mb2"><?= $page->kingdomgiverheader() ?></p>

        <p class="tiny-justify"><?= $page->kingdomgivertext() ?></p>

        <!-- Pass on giver variable, for google analytics tracking -->
        <?php snippet('paypal', array('giver' => '')) ?>

        <p class="small mt2 light-gray"><?= $page->completionInfo() ?></p>

        <h5 class="regular m0">
          <span class="bold"><?= $page->accountName() ?>:</span> Berlin Christian Life Centre e.V.<br/>
          <span class="bold">Bank:</span>Commerzbank Berlin<br/>
          <span class="bold">SWIFT Code (BIC):</span> COBADEFF120<br/>
          <span class="bold">IBAN:</span> DE77120400000623459501<br/>
          <span class="bold"><?= $page->reference() ?>:</span> Kingdom Giver
        </h5>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
