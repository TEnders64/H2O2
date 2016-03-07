<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>H2O2 - Capitol Hill</title>
	<link rel="stylesheet" href="/assets/css/materialize.min.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="/assets/js/jquery-1.11.3.min.js"></script>
	<script src="/assets/js/materialize.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyB2a6yPTtz9dMjpVlooC_dPP0fBIh1Dod4"></script>
	<script>
		$(document).ready(function(){
			// console.log('ready');
			// $('.parallax').parallax();

			var map;
			var salon = {lat: 47.6270111, lng: -122.307025};

			function initialize(){
				var mapOptions = {
					center: salon,
					zoom: 14,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					panControl: false
				}
				map = new google.maps.Map(document.getElementById('map'), mapOptions);
				
				var marker = new google.maps.Marker({
					position: salon,
					title: 'H2O2',
					info: '1900 E Aloha, Seattle, WA, 98112',
					map: map
				});
			}

			$('.row').on('click', '#directions', function (){
				if (navigator.geolocation){
					var user_position = navigator.geolocation.getCurrentPosition(getPosition);

				}else{
					console.log("Geolocation Not Supported By Browser");
				}
			});


			var coords;

			function getPosition(pos){
				coords = {
					lat: pos.coords.latitude, 
					lng: pos.coords.longitude
					};
				// console.log(pos);
				getDirections(coords);
			}

			function getDirections(user_location){
				// console.log(user_location);
				// console.log(map);
				var directionsDisplay = new google.maps.DirectionsRenderer({
					    map: map
				});
				console.log(directionsDisplay);

				var request = {
					destination: salon,
					origin: user_location,
					travelMode: google.maps.TravelMode.DRIVING 
				};

				var directionsService = new google.maps.DirectionsService();
				  
				directionsService.route(request, function(response, status) {
					console.log(status);
					console.log(response);
				    if (status == google.maps.DirectionsStatus.OK) {
				      // Display the route on the map.
				      directionsDisplay.setDirections(response);
				    }
			  	});
			}

			google.maps.event.addDomListener(window, 'load', initialize);

		})
	</script>
</head>
<body>
	<?php $this->load->view('/partials/header'); ?>
	<main>
		<div id="contact" class="section center grey lighten-2">
		    <div class="row">
		    	<div class="col m6 offset-m3">
		      		<div class="card z-depth-2">
						<div class="card-content">
							<div id="map"></div>
						</div>
		      		</div>
				</div>
				<div class="col m6">
		      		<div class="card z-depth-2">
						<div class="card-content">
							<h3><u>Where To Find Us</u></h3>
							<h4>1900 E. Aloha St<br>Seattle, WA, 98112</h4>
							<!-- <a id="directions" class="waves-effect waves-light light-blue btn"><i class="material-icons left">navigation</i>Get Directions</a> -->
							<h3><u>Appointments</u><br><strong>206-329-3333</strong></h3>
						</div>
		      		</div>
				</div>
		    </div>
		</div>
	</main>
	<?php $this->load->view('/partials/footer') ?>
</body>
</html>