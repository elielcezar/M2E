<?ph
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>


<header>
<div class="container">
    <a id="menu-toggle">
        <span>MENU</span>
        <div class="burger"><b></b><b></b><b></b></div>
    </a>
    <div class="m2e"><a href="<?php print $GLOBALS['base_path']; ?>">M2E Comunicação Digital</a></div>
</div>
</header>
<!-- HEADER -->

<div class="bootstrap panel-display panel-1col clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>




  <section class="conteudo">



 	<div id="googlemaps"></div>


  <div class="container">
      <div class="form-contato"> <?php print $content['middle']; ?></div>
</div>

    </section>




</div>


<!-- Include the Google Maps API library - required for embedding maps -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">

// The latitude and longitude of your business / place
var position = [-25.4248086,-49.3246899];



function showGoogleMaps() {

     var styles = [
          {
            stylers: [
              { saturation: -90 }
            ]
          }
        ];






    var latLng = new google.maps.LatLng(position[0], position[1]);

    var mapOptions = {
        zoom: 16, // initialize zoom level - the max value is 21
        streetViewControl: true, // hide the yellow Street View pegman
        scaleControl: false, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng,
        scrollwheel: false,
        mapTypeControl: false,
        scaleControl: false,
        disableDefaultUI:true,
        disableDefaultUI: true,
        navigationControl: false,

        center:new google.maps.LatLng(-25.4248086,-49.3269899)
    };

    var image = 'http://ecwd.net/m2e/sites/all/themes/m2e2015/img/icon_gmaps.png';

    map = new google.maps.Map(document.getElementById('googlemaps'),
        mapOptions);

    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        clickable: true,
        icon: image,
        animation: google.maps.Animation.DROP
    });



        map.setOptions({styles: styles});



    var infowindow = new google.maps.InfoWindow({
      content:"<h4>M2E Comunicação Digital</h4><p>Rua Anna Gbur Barcik, 499 - Santo Inácio<br />CEP 82010-670<br />Curitiba/PR<br /> >> <a href=\"http://goo.gl/7V88Z3\" target=\"_blank\">Saiba como chegar</a></p>"
      });

    google.maps.event.addListener(marker, 'click', function() { infowindow.open(map,marker); });
}

google.maps.event.addDomListener(window, 'load', showGoogleMaps);
</script>
