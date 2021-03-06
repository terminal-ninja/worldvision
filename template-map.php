<?php /* Template Name: Map Template */ get_header(); ?>

<!-- <style>
  html, body {
  height: 100%;
  margin: 0;
  padding: 0;
  }
  #map {
    height: 100%;
  }
</style> -->

<!-- <div id="map"></div> -->
<div id="map_canvas" style="width:75%; height:500px;float: left"></div>
  <ul id="marker_list" style="width:23%;float: right"></ul>
<!-- Replace the value of the key parameter with your own API key. -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.0.min.js"></script>
<style type="text/css">
    #map_canvas {
      width: 75%;
      height: 500px;
      float: left;
    }
    ul#marker_list {
      padding:0;
      margin: 0;
      width: 23%;
      height: 500px;
      float: right;
    }
    ul#marker_list li {
      list-style: none;
      border: 1px solid #ccc;
      cursor: pointer;
      background-color: #eeeeee;
    } 
  </style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDxSkKsMgiZTaiDTyswwiy5vQElYeOe_Ac&sensor=false&v=3&libraries=adsense"></script>


<script type='text/javascript'>

var stationList = [
  {"latlng":[35.681382,139.766084],name:"Tokyo Station"},
  {"latlng":[35.630152,139.74044],name:"Shinagawa Station"},
  {"latlng":[35.507456,139.617585],name:"Shin-Yokohama Station"},
  {"latlng":[35.25642,139.154904],name:"Odawara Station"},
  {"latlng":[35.103217,139.07776],name:"Atami Station"},
  {"latlng":[35.127152,138.910627],name:"Mishima Station"},
  {"latlng":[35.142015,138.663382],name:"Shin-Fuji Station"},
  {"latlng":[34.97171,138.38884],name:"Shizuoka Station"},
  {"latlng":[34.769758,138.014928],name:"Kakegawa Station"},
  {"latlng":[34.703741,137.734442],name:"Hamamatsu Station"},
  {"latlng":[34.762811,137.381651],name:"Toyohashi Station"},
  {"latlng":[34.96897,137.060662],name:"Mikawa-Anjyo Station"},
  {"latlng":[35.170694,136.881637],name:"Nagoya Station"},
  {"latlng":[35.315705,136.685593],name:"Gifu-Hashima Station"},
  {"latlng":[35.314188,136.290488],name:"Yonehara Station"},
  {"latlng":[34.985458,135.757755],name:"Kyoto Station"},
  {"latlng":[34.73348,135.500109],name:"Shin-Osaka Station"}
];
var infoWnd, mapCanvas;
function initialize() {
  //Creates a map object.
  var mapDiv = document.getElementById("map_canvas");
  mapCanvas = new google.maps.Map(mapDiv);
  mapCanvas.setMapTypeId(google.maps.MapTypeId.ROADMAP);
  
  //Creates a infowindow object.
  infoWnd = new google.maps.InfoWindow();
  
  //Mapping markers on the map
  var bounds = new google.maps.LatLngBounds();
  var station, i, latlng;
  for (i in stationList) {
    //Creates a marker
    station = stationList[i];
    latlng = new google.maps.LatLng(station.latlng[0], station.latlng[1]);
    bounds.extend(latlng);
    var marker = createMarker(
      mapCanvas, latlng, station.name
    );
    
    //Creates a sidebar button for the marker
    createMarkerButton(marker);
  }
  //Fits the map bounds
  mapCanvas.fitBounds(bounds);
}
function createMarker(map, latlng, title) {
  //Creates a marker
  var marker = new google.maps.Marker({
    position : latlng,
    map : map,
    title : title
  });
  
  //The infoWindow is opened when the sidebar button is clicked
  google.maps.event.addListener(marker, "click", function(){
    infoWnd.setContent("<strong>" + title + "</title>");
    infoWnd.open(map, marker);
  });
  return marker;
}
function createMarkerButton(marker) {
  //Creates a sidebar button
  var ul = document.getElementById("marker_list");
  var li = document.createElement("li");
  var title = marker.getTitle();
  li.innerHTML = title;
  ul.appendChild(li);
  
  //Trigger a click event to marker when the button is clicked.
  google.maps.event.addDomListener(li, "click", function(){
    google.maps.event.trigger(marker, "click");
  });
}
google.maps.event.addDomListener(window, "load", initialize);
  </script>
  <script>
    // <!-- jQuery(document).ready(function() { -->
    //Trigger a click event to marker when the button is clicked.
    // google.maps.event.addDomListener(li, "click", function(){
      // google.maps.event.trigger(marker, "click");
    // });

    //Trigger a click event to marker when the button is clicked.
    // google.maps.event.addDomListener(li, "click", function(){
      // google.maps.event.trigger(marker, "click");
    // });


    
  // });
</script>

    https://jsfiddle.net/659ttnu0/
    https://jsfiddle.net/659ttnu0/1/
    <?php get_footer(); ?>