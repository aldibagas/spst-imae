<link rel="stylesheet" href="assets/js/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
<!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

<script src="assets/js/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
 <script src="assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>

    <script src="assets/js/leaflet-routing-machine/examples/Control.Geocoder.js"></script>

   <script type="text/javascript">

   	var map = L.map('mapid').setView([-7.288120, 112.813499], 20);

   	var LayerKita=L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
	});
	map.addLayer(LayerKita);
	L.marker([-7.288120, 112.813499]).addTo(map);

	// marker
	var myIcon = L.icon({
	    iconUrl: '<?=assets('icons/marker.png')?>',
	    iconSize: [38, 45],
	});

	//rute
	var control = L.Routing.control({
	    waypoints: [
	        L.latLng(-7.288120, 112.813499),
	        L.latLng(-7.5532, 112.813499)
	    ],
	    geocoder: L.Control.Geocoder.nominatim(),
		routeWhileDragging: true,
		reverseWaypoints: true,
		showAlternatives: true,
		altLineOptions: {
			styles: [
				{color: 'black', opacity: 0.15, weight: 9},
				{color: 'white', opacity: 0.8, weight: 6},
				{color: 'blue', opacity: 0.5, weight: 2}
			]
		}
	})
	control.addTo(map);
	function keSini(lat,lng){
        var latLng=L.latLng(lat, lng);
		control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
	}
   </script>