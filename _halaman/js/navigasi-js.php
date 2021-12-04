<link rel="stylesheet" href="<?=assets()?>js/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
<!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

<script src="<?=assets()?>js/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
 <script src="<?=assets()?>js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
 <script src="<?=assets()?>js/leaflet-search/dist/leaflet-search.src.js"></script>
   <script src="<?=assets()?>js/leaflet-routing-machine/examples/Control.Geocoder.js"></script>

   <script type="text/javascript">
   	let latLng=[-3.824181, 114.8191513];
   	var map = L.map('mapid').setView(latLng, 15);
   	var Layer=L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
	});
	
	map.addLayer(Layer);
	// ambil titik
	getLocation();
	setInterval(() => {
		getLocation();
	}, 1000);

	function getLocation() {
	  if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(showPosition);
	  } else {
	    x.innerHTML = "Geolocation is not supported by this browser.";
	  }
	}

	function showPosition(position) {
	  $("[name=latNow]").val(position.coords.latitude);
	  $("[name=lngNow]").val(position.coords.longitude);
	  let latLng=[position.coords.latitude, position.coords.longitude];
	  console.log(latLng)
        control.spliceWaypoints(0, 1, latLng);
        map.panTo(latLng);
	}

	
	// rute 
	var control = L.Routing.control({
	    waypoints: [
	        latLng, [lat, long]
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
		},
		createMarker: function (i, waypoint, n) {
			let urlIcon;
			console.log(i+", "+n);
			var pos=i+1;
			if(pos==1){
				urlIcon='<?=assets('img/trukhijaurev.jpg')?>';
			}
			else if(pos==n){
				urlIcon='<?=assets('img/avatar1.jpg')?>';
			}
			else{
				urlIcon='<?=assets('img/trukhijau.png')?>';
			}

            const marker = L.marker(waypoint.latLng, {
              draggable: true,
              bounceOnAdd: false,
              bounceOnAddOptions: {
                duration: 1000,
                height: 800,
                function() {
                  (bindPopup(myPopup).openOn(map))
                }
              },
              icon: L.icon({
    			iconUrl: urlIcon,
		    	iconSize: [38, 45]
              })
            });
            return marker;
          }
	})
	control.addTo(map);

  function saveData() {
        var confirmed = document.getElementById('confirmed').checked ? 1 : 0;
        var id = document.getElementById('id').value;
        var url = 'pengambilan.php?confirm_location&id=' + id + '&confirmed=' + confirmed ;
        downloadUrl(url, function(data, responseCode) {
            if (responseCode === 200  && data.length > 1) {
                infowindow.close();
                window.location.reload(true);
            }else{
                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
            }
        });
    }

	$(function(){
	 let lat =	parseFloat(document.getElementById("lat").innerHTML);
	 let long =	parseFloat(document.getElementById("long").innerHTML);
	 let latLng1 = [lat, long];
	 control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng1);
	})
   </script>