   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


<script src="<?=assets()?>js/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
 <script src="<?=assets()?>js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
 <script src="<?=assets()?>js/leaflet-search/dist/leaflet-search.src.js"></script>
   <script src="<?=assets()?>js/leaflet-routing-machine/examples/Control.Geocoder.js"></script>

   <script type="text/javascript">
   	let latLng=[-3.824181, 114.8191513];
   	var map = L.map('mapid').setView(latLng, 15);
	var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	maxZoom: 18,
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	id: 'mapbox/streets-v11',
	tileSize: 512,
	zoomOffset: -1
	}).addTo(map);
	
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
	}

	
	// rute 
	var control = L.Routing.control({
	    waypoints: [
	        
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
				urlIcon='<?=assets('icons/house.png')?>';
			}
			else if(pos==n){
				urlIcon='<?=assets('icons/marker.png')?>';
			}
			else{
				urlIcon='<?=assets('icons/marker.png')?>';
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