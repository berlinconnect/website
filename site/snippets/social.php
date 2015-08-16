<!-- these images do not have to be dynamic -->

<div class="social-links">
  <a href="<?= $site->facebooklink() ?>" class="display-inline mr2" onclick="_gaq.push(['_trackEvent', 'Social Link', 'Clicked', 'Facebook in Hero']);">
    <img src="../images/social/facebook.svg" width="<?= $iconSize ?>">
  </a>
  <a href="<?= $site->twitterlink() ?>" class="display-inline mr2" onclick="_gaq.push(['_trackEvent', 'Social Link', 'Clicked', 'Facebook in Hero']);">
    <img src="../images/social/twitter.svg" width="<?= $iconSize ?>">
  </a>
  <a href="<?= $site->instagramlink() ?>" class="display-inline mr2" onclick="_gaq.push(['_trackEvent', 'Social Link', 'Clicked', 'Facebook in Hero']);">
    <img src="../images/social/instagram.svg" width="<?= $iconSize ?>">
  </a>
  <a href="<?= $site->tumblrlink() ?>" class="display-inline" onclick="_gaq.push(['_trackEvent', 'Social Link', 'Clicked', 'Facebook in Hero']);">
    <img src="../images/social/tumblr.svg" width="<?= $iconSize ?>">
  </a>
</div>
