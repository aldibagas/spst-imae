<link rel="stylesheet" href="assets/js/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
<!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

<script src="assets/js/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
 <script src="assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>

   <script src="assets/js/leaflet-routing-machine/examples/Control.Geocoder.js"></script>

   <script type="text/javascript">
      let infoWindow;

   	var map = L.map('mapid').setView([-7.292904, 112.809361], 22); //setview([latitute,longitude], zoom)

   	var LayerKita=L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
	});

	map.addLayer(LayerKita);

	L.marker([-7.292122, 112.8092]).addTo(map);
		// .bindPopup("<b>lokasi sekarang!</b><br />-7.288120, 112.813499.").openPopup();
   
   var popup = L.popup();

   function onMapClick(e) {
      popup
         .setLatLng(e.latlng)
         .setContent("You clicked the map at " + e.latlng.toString())
         .openOn(map);
   }

   map.on('click', onMapClick);

	function onLocationFound(e) {
		var radius = e.accuracy / 10;

		L.marker(e.latlng).addTo(map)
			.bindPopup("You are within " + radius + " meters from this point").openPopup();

		L.circle(e.latlng, radius).addTo(map);
	}

	function onLocationError(e) {
		alert(e.message);
	}

	map.on('locationfound', onLocationFound);
	map.on('locationerror', onLocationError);

	map.locate({setView: true, maxZoom: 22});
   </script>