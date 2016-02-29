<!-- Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script>
    function initialize() {
      var myLatLng = new google.maps.LatLng(52.5393402, 13.413439);
      var map_canvas = document.getElementById('map_canvas');
      var myIcon = new google.maps.MarkerImage("<?php echo url('images/logo/logo-black.png') ?>", null, null, null, new google.maps.Size(60,60));
      var isDraggable = $(document).width() > 480 ? true : false;
      var map_options = {
        center: new google.maps.LatLng(13.413439, 13.413439),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        draggable: isDraggable
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
