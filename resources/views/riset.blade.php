<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""/>
   <title>Document</title>

   <style>
      #mapid { height: 600px; width: 600px; }
   </style>
</head>
<body>
   <div id="mapid"></div>

   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
      integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
      crossorigin=""></script>

   <script src="{{ asset('vendor/leaflet/leaflet-ajax/leaflet.ajax.min.js') }}"></script>   

   <script>
      var mymap = L.map('mapid').setView([-6.966988, 111.861726], 10);

      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
         maxZoom: 12 ,
         id: 'mapbox/streets-v11',
         tileSize: 512,
         zoomOffset: -1,
         accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
      }).addTo(mymap);

      function popUp(f,l){
         var out = [];
         if (f.properties){
            for(key in f.properties){
                  out.push(key+": "+f.properties[key]);
            }
            l.bindPopup(out.join("<br />"));
         }
      }

      var jsonTest = new L.GeoJSON.AJAX(["colleges.geojson","counties.geojson"],{onEachFeature:popUp}).addTo(m);
   </script>
</body>
</html>