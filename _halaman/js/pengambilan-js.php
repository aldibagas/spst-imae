<?php

   if(isset($_POST['insert'])) 
   {
     $latitude = $_POST ['latNow'];
     $longitude = $_POST ['lngNow'];

     $query = "INSERT INTO jual (latNow,lngNow) VALUES ('$latitude','$longitude') ";
     $query_run = mysqli_query($conn,$query); 
   
   if($query_run)
   {
     echo ' <script type="text/javaScript"> alert("Data Tersimpan") 
     </script>';
   }

   else
   {
     echo ' <script type="text/javaScript"> alert("Data Not Saved") 
     </script>';
   }
 }
 ?>
<link rel="stylesheet" href="assets/js/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
<!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

<script src="assets/js/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
 <script src="assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>

   <script src="assets/js/leaflet-routing-machine/examples/Control.Geocoder.js"></script>
   <script src="js/topojson.min.js"></script>
   <script type="text/javascript">
      let infoWindow;

   	var map = L.map('mapid').setView([-7.292904, 112.809361], 10); //setview([latitute,longitude], zoom)

   	var LayerKita=L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
	});

	map.addLayer(LayerKita);
	
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
			.setContent("You clicked the map at " + e.latlng.toString()).openPopup();

		L.circle(e.latlng, radius).addTo(map);
	}

	function onLocationError(e) {
		alert(e.message);
	}

	map.on('locationfound', onLocationFound);
	map.on('locationerror', onLocationError);

	map.locate({setView: true, maxZoom: 22});

	
	setInterval(() => {
		getLocation();
	}, 3000);

	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		} else {
			x.innerHTML = "Geolocation is not supported by this browser.";
		}
	}

	function showPosition(position) {
		console.log('Posisi Sekarang',position.coords.latitude,position.coords.longitude)
    
    document.getElementById("insertLat").value = position.coords.latitude;
    document.getElementById("insertLong").value = position.coords.longitude;
		$("[name=latNow]").val(position.coords.latitude);
		$("[name=lngNow").val(position.coords.longitude);
	}

   </script>
