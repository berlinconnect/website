<!DOCTYPE html>
<html lang="en">
<head>

  <title>
    <?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?>
  </title>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?php echo html($site->description()) ?>" />

  <link rel="icon" href="<?php echo url('img/favicon.ico') ?>" type="image/x-icon">

  <?php echo css('css/styles.css') ?>

  <!-- Typekit -->
  <script type="text/javascript" src="//use.typekit.net/xkv4ghj.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <!-- Masonry -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>

  <!-- Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script>
    function initialize() {
      var myLatLng = new google.maps.LatLng(52.521300, 13.406281);
      var map_canvas = document.getElementById('map_canvas');
      var myIcon = new google.maps.MarkerImage("<?php echo url('images/logo/logo-black.png') ?>", null, null, null, new google.maps.Size(60,60));
      var map_options = {
        center: new google.maps.LatLng(52.521874, 13.410211),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
      }
      var map = new google.maps.Map(map_canvas, map_options)
      var marker = new google.maps.Marker({
        position: myLatLng,
        icon: myIcon,
        map: map
      });
      marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
</head>
<body class="animated fadeIn">
  <div  class="full-width full-height fixed top-0 left-0 border-box sidebar-container behind">
    <div class="absolute right-0 full-height border-box p3 bg-dark-gray sidebar">
      <a id="closeSidebar" href="#" class="h4 regular caps bc-white block mt1 right">Close<img class="ml1" src="../images/ui/close-bc-white.svg" width="14px" alt="sidebar"/>
      </a>
    </div>
  </div>
  <div class="stage">