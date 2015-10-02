<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => '', 'bgPosition' => 'center-bg')) ?>

<div class="full-width clearfix">
  <div class="p4 bg-dark-gray">
    <div class="center video-wrapper border-box">
      <iframe src="<?= $page->video() ?>" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>

    <div class="flex flex-stretch flex-column md-flex-row">

      <div class="flex flex-center col-12 md-col-6 full-height cover-bg flex-content-stretch center-bg h4h-image" style="background-image:url('<?= $pages->find('h4h2015')->image('giver1.jpg')->url(); ?>');">
        <h1 class="flex-auto center bc-white bold letter-spacing-2 m0 py4"><?= $page->faithfulGiverTitle() ?></h1>
      </div>

      <div class="col-12 md-col-6 tiny-center sm-center md-left border-box full-height p2 xsm-p3 lg-p4">

        <p class="h4 regular bc-blue caps line-height-2 m0 mb2"><?= $page->faithfulGiverHeader() ?></p>

        <p class="tiny-justify"><?= $page->faithfulGiverText() ?></p>

        <a href="" class="h5 caps bold p2 px3 center bg-bc-blue bc-white block" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Sign up for team']);">Online Giving</a>

        <p class="small mt2 light-gray">Online giving opens 1 October 2015. Giving envelopes ready on 30 September 2015. All Heart for the House giving to be completed before 31 October 2015.</p>
        
        <h5 class="regular m0">
          <span class="bold">Account Name:</span> Berlin Christian Life Centre e.V.<br/>
          <span class="bold">Bank:</span>Commerzbank Berlin<br/>
          <span class="bold">SWIFT Code (BIC):</span> COBADEFF120<br/>
          <span class="bold">IBAN:</span> DE77120400000623459501<br/>
          <span class="bold">Reference:</span> H4TH2015
        </h5>
      </div>

    </div>

    
    <div class="flex flex-stretch flex-column md-flex-row">

      <div class="flex flex-center col-12 md-col-6 full-height cover-bg flex-content-stretch center-bg h4h-image" style="background-image:url('<?= $pages->find('h4h2015')->image('giver2.jpg')->url(); ?>');">
        <h1 class="flex-auto center bc-white bold letter-spacing-2 m0 py4"><?= $page->visionGiverTitle() ?></h1>
      </div>

      <div class="flex-first col-12 md-col-6 tiny-center sm-center md-left border-box full-height p2 xsm-p3 lg-p4">

        <p class="h4 regular bc-blue caps line-height-2 m0 mb2"><?= $page->visionGiverHeader() ?></p>

        <p class="tiny-justify"><?= $page->visionGiverText() ?></p>

        <a href="" class="h5 caps bold p2 px3 center bg-bc-blue bc-white block" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Sign up for team']);">Online Giving</a>

        <p class="small mt2 light-gray">Online giving opens 1 October 2015. Giving envelopes ready on 30 September 2015. All Heart for the House giving to be completed before 31 October 2015.</p>
        
        <h5 class="regular m0">
          <span class="bold">Account Name:</span> Berlin Christian Life Centre e.V.<br/>
          <span class="bold">Bank:</span>Commerzbank Berlin<br/>
          <span class="bold">SWIFT Code (BIC):</span> COBADEFF120<br/>
          <span class="bold">IBAN:</span> DE77120400000623459501<br/>
          <span class="bold">Reference:</span> Vision Giver
        </h5>
      </div>

    </div>

    <div class="flex flex-stretch flex-column md-flex-row">

      <div class="flex flex-center col-12 md-col-6 full-height cover-bg flex-content-stretch center-bg h4h-image" style="background-image:url('<?= $pages->find('h4h2015')->image('giver3.jpg')->url(); ?>');">
        <h1 class="flex-auto center bc-white bold letter-spacing-2 m0 py4"><?= $page->kingdomGiverTitle() ?></h1>
      </div>

      <div class="col-12 md-col-6 tiny-center sm-center md-left border-box full-height p2 xsm-p3 lg-p4">

        <p class="h4 regular bc-blue caps line-height-2 m0 mb2"><?= $page->kingdomGiverHeader() ?></p>

        <p class="tiny-justify"><?= $page->kingdomGiverText() ?></p>

        <a href="" class="h5 caps bold p2 px3 center bg-bc-blue bc-white block" onclick="_gaq.push(['_trackEvent', 'Buttons', 'Clicked', 'Sign up for team']);">Online Giving</a>

        <p class="small mt2 light-gray">Online giving opens 1 October 2015. Giving envelopes ready on 30 September 2015. All Heart for the House giving to be completed before 31 October 2015.</p>
        
        <h5 class="regular m0">
          <span class="bold">Account Name:</span> Berlin Christian Life Centre e.V.<br/>
          <span class="bold">Bank:</span>Commerzbank Berlin<br/>
          <span class="bold">SWIFT Code (BIC):</span> COBADEFF120<br/>
          <span class="bold">IBAN:</span> DE77120400000623459501<br/>
          <span class="bold">Reference:</span> Kingdom Giver
        </h5>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>