<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {{-- <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script> --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>

    <style>
      html, body {
        height: 100%;
        padding: 0;
        margin: 0;
      }
      #map {
        /* configure the size of the map */
        width: 800px;
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function getRandomLatLng(map) {
			var bounds = map.getBounds(),
				southWest = bounds.getSouthWest(),
				northEast = bounds.getNorthEast(),
				lngSpan = northEast.lng - southWest.lng,
				latSpan = northEast.lat - southWest.lat;

			return new L.LatLng(
					southWest.lat + latSpan * Math.random(),
					southWest.lng + lngSpan * Math.random());
		}

      // initialize Leaflet
      var map = L.map('map').setView({
         lon: 111.861726, 
         lat: -6.966988
      }, 10);

      // add the OpenStreetMap tiles
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
         // maxZoom: 17,
         // minZoom: 10,
         attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
      }).addTo(map);

      // show the scale bar on the lower left corner
      L.control.scale().addTo(map);

      // show a marker on the map
      L.marker({lon: 111.861726, lat: -6.966988}).bindPopup('The center of the world').addTo(map);

      var palang = [[112.08672523498535, -6.911601069301281], [112.09590911865234, -6.916117016421768]];
      var latlngs = [
         [17.385044, 78.486671],
         [16.506174, 80.648015],
         [17.686816, 83.218482]
      ];
      // var latlngs = [[112.08672523498535, -6.911601069301281],[112.09590911865234, -6.916117016421768]];
      var rectOptions = {color: 'Red', weight: 1}
      var polygon = L.rectangle(palang, rectOptions).addTo(map);

      // polygon.addTo(map);
      // L.circle({lon: 111.861726, lat: -6.966988}, {radius: 2000}).addTo(map);

      // var markers = L.markerClusterGroup();
      // markers.addLayer(L.marker(getRandomLatLng(map)));
      // markers.addLayer(L.marker(getRandomLatLng(map)));
      // markers.addLayer(L.marker(getRandomLatLng(map)));
      // markers.addLayer(L.marker(getRandomLatLng(map)));

      // map.addLayer(markers);

      // console.log(L.marker(getRandomLatLng(map)));
      </script>
   </body>
</html>