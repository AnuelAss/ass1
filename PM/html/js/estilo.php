
jQuery(document).ready(function ($) {
    function initialize() {
      // var madryn = new google.maps.LatLng(-42.7732869,-65.0414546);
      var mapOptions = {
        zoom: 14,
        center: {lat: -42.7732869, lng: -65.0414546}
      }
      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    
      // Carga de kml
      $('#multiple').change(function(){
        /$('.win-ring').css('');/
        var check_KML = document.getElementById("multiple");
    
        if(check_KML.value=="General")
        {
         var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        }
        else{var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          var ctaLayer = new  google.maps.KmlLayer( url:Linea1.kml.value,map: map  );
          //ctaLayer.setMap(map);
          /$('.win-ring').hide();/} 
    ;