<!DOCTYPE html>
<html lang="en">
<head>

  <title>
    <?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?>
  </title>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
  <meta name="description" content="<?php echo html($site->description()) ?>" />

  <meta name="theme-color" content="#0087e0">

  <meta content="summary" name="twitter:card">
  <meta content="@berliconnect" name="twitter:site">
  <meta content="<?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?>" name="twitter:title">
  <meta content="<?= excerpt($page->description(), 300) ?>">

  <?php if($page->parent()->id() == 'enlarge'): ?>
    <meta property="og:type" content="article" />
    <meta content="<?= excerpt($page->text(), 300) ?>" itemprop="description">
    <meta content="<?= excerpt($page->text(), 300) ?>">
    <meta property="og:description" content="<?= excerpt($page->text(), 300) ?>" />
    <meta content="<?= excerpt($page->text(), 300) ?>" itemprop="description">
  <?php else: ?>
    <meta content="<?= $site->description() ?>">
    <meta content="<?= $site->description() ?>" itemprop="description">
    <meta property="og:description" content="<?= $site->description() ?>" />
    <meta content="<?= $site->description() ?>" itemprop="description">
  <?php endif ?>
  <meta property="og:site_name" content="<?php echo $site->title()->html() ?>" />
  <meta property="og:description" content="<?= excerpt($page->description(), 300) ?>" />
  <meta property="og:url" content="<?= $page->url() ?>" />
  <meta property="og:title" content="<?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?>" />
  <meta property="og:image" content="<?php echo $page->images()->first()->url(); ?>" />
  <meta property="article:author" content="<?= $site->url() ?>" />

  <meta content="<?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?>" itemprop="name">
  <meta content="<?= excerpt($page->description(), 300) ?>" itemprop="description">

  <link rel="icon" type="image/png" href="../images/favicon.ico" sizes="32x32" />

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
        draggable: false
      }
      var map = new google.maps.Map(map_canvas, map_options)
      var marker = new google.maps.Marker({
        position: myLatLng,
        icon: myIcon,
        map: map
      });
      map.panTo(marker.getPosition());
      marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

  <!-- Google Analytics -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-82811-13']);
    _gaq.push(['_setDomainName', 'myberlinconnect.de']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body class="animated fadeIn">
  <?= snippet('notice')?>
  <?= snippet('sidebar')?>
  <div class="stage">
