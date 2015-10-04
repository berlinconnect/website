<!DOCTYPE html>
<html lang="en" <?php if($page->id() == 'error'): ?>style="height:100%;min-height:100%"<?php endif ?>>
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

  <?php if($page->parent()->id() == 'toolbox'): ?>
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
  <meta property="og:image" content="<?php if($image = $page->image()): ?><?php echo $image->url() ?><?php endif ?>" />
  <meta property="article:author" content="<?= $site->url() ?>" />

  <meta content="<?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?>" itemprop="name">
  <meta content="<?= excerpt($page->description(), 300) ?>" itemprop="description">

  <link rel="icon" type="image/png" href="../../images/favicon.ico" sizes="32x32" />

  <?php echo css('css/styles.css') ?>

  <!-- Typekit -->
  <script type="text/javascript" src="//use.typekit.net/xkv4ghj.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <?php echo js('js/libs/jquery.js') ?>

  <!-- Masonry -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
  <?php echo js('js/plugins/isotope.js') ?>
  <?php echo js('js/plugins/packery.js') ?>


  <?php
    if ($page->venuelocation() == "hausungarn") {
      snippet('gmap_hausungarn');
    }
    else{
      snippet('gmap_maritimHotel');
    }
  ?>

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
<body class="animated fadeIn <?php if($page->id() == 'error'): ?>body-full-height<?php endif ?>">
  <?= snippet('notice')?>
  <?= snippet('sidebar')?>
  <div class="full-width p1 border-box bg-bc-blue filterhidden slideUp fixed top-0 left-0 z2 md-show">
    <div class="container flex flex-justify filter-group filter-button-group">
      <button class="bg-transparent h5 m0 p0" data-filter="*">Show all</button>
      <?php

      // fetch all tags
      $tags = $pages->find('enlarge')->find('toolbox')->children()->visible()->pluck('tags', ',', true);


      ?>
      <?php foreach($tags as $tag):
        $tagStripped = str_replace("-"," ",$tag);
      ?>
        <button class="bg-transparent h5 m0 p0" data-filter=".<?= $tag ?>"><?= $tagStripped ?></button>
      <?php endforeach ?>
    </div>
  </div>

  <div class="stage <?php if($page->id() == 'error'): ?>body-full-height<?php endif ?>">
