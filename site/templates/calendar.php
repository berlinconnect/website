<?php snippet('header') ?>
<?php snippet('hero', array('bgAttachement' => 'bg-fixed', 'bgPosition' => 'center-bg')) ?>

<div class="tiny-py0 md-py0 lg-py0 mb4 container clearfix">
  <!-- <div class="events grid"> -->
    <?php foreach($page->children()->visible()->sortBy('date', 'asc') as $event): ?>
      <?php
        // get the current date and the date in seven days
        $now = date('M d, Y');
        $now = strtotime($now);

        // get date of the event
        $date = $event->date();

        if ($now <= $date) {

          /* 
          Save two Dates, and then compare them. 
          If there is a new Month, then a new Month section is created 
          */

          $dateLatter = $event->date('F');
          /* 
          In the beginning, the month of the first event is saved.
          Header div is created
          */
          if (empty($dateFormer)) {
            $dateFormer = $event->date('F');
            echo "<div class='col col-12 mb1'>";
            echo "<h1 class='center'>";
            echo $dateLatter;
            echo "</br>";
            echo "</h1>";
            echo "</div>";
          }
          /* 
          The month of the first event and the month of the current event in the loop
          are compared. 
          If they are not the same, then header div is created, and 
          the month used for comparison ($dateFormer) will be reset
          */
          if (strcmp($dateFormer, $dateLatter) !== 0 ) {
            $dateFormer = $event->date('F');
            echo "<div class='col col-12 mt1 mb1'>";
            echo "<h1 class='center'>";
            echo $dateLatter;
            echo "</br>";
            echo "</h1>";
            echo "</div>";
          }
            
          snippet('single-event', array('event' => $event));
        
        }

      ?>
        
      <!-- endif ?>  -->
    <?php endforeach ?>
  <!-- </div> -->
</div>

<script type="text/javascript">

  var elem = document.querySelector('.grid');
  var msnry = new Masonry( elem, {
    // options
    itemSelector: '.grid-item',
  });

  // element argument can be a selector string
  //   for an individual element
  var msnry = new Masonry( '.grid', {
    // options
  });

</script>

<?php snippet('footer') ?>
