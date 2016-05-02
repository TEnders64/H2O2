<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>H2O2 - Seattle</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="/assets/css/materialize.min.css">
		<link rel="stylesheet" href="/assets/css/testing_stylesheet.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="/assets/js/jquery-1.11.3.min.js"></script>
		<script src="/assets/js/materialize.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyB2a6yPTtz9dMjpVlooC_dPP0fBIh1Dod4"></script>
		<script type="text/javascript">

				// Copyright 2014-2015 Twitter, Inc.
				// Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
				if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
					var msViewportStyle = document.createElement('style')
					msViewportStyle.appendChild(
				    	document.createTextNode(
				    		'@-ms-viewport{width:auto!important}'
				    	)
				  	)
				  	document.querySelector('head').appendChild(msViewportStyle)
				}
				//accounting for fixed navbar covering the initial content when jumping from hash to hash
				function shiftWindow(){
					if (window.location.hash !== '#contact'){
						scrollBy(0, -80);
					}else{
						scrollBy(0, 0);
					}
				}

				window.addEventListener("hashchange", shiftWindow);

				function load() {
					if (window.location.hash) {
						shiftWindow();
					}
				}
				$(document).ready(function(){

					//activating parallax
					$('.parallax').parallax();
					//activating the hamburger side nav
					$('.button-collapse').sideNav({
						menuWidth: 200,
						closeOnClick: true
					});

					//google Maps API
					var map;
					var marker;
					var salon = {lat: 47.6269551, lng: -122.3092533};

					function initialize(){
						var mapOptions = {
							center: salon,
							zoom: 14,
							mapTypeId: google.maps.MapTypeId.ROADMAP,
							panControl: false,
							scrollwheel: false
						}
						map = new google.maps.Map(document.getElementById('map'), mapOptions);

						marker = new google.maps.Marker({
							position: salon,
							title: 'H2O2',
							info: '1900 E Aloha, Seattle, WA, 98112',
							map: map
						});

						var info = new google.maps.InfoWindow({
							content: "<div class='row'><div class='col l4'><img src='/assets/images/H2O2_logo-04.png' style='height: 57px; width: 100px'></div><div class='col l8'><h6>1900 E Aloha St<br>Seattle, WA 98112</h6></div></div>"
						});

						marker.addListener('click', function() {
								info.open(map, marker);
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

						getDirections(coords);
						$('#right-panel').css('width', '390px');
						google.maps.event.trigger(map, 'resize');
					}

					function getDirections(user_location){

						var directionsDisplay = new google.maps.DirectionsRenderer({
									map: map,
									panel: document.getElementById('right-panel')//new
						});

						var request = {
							destination: salon,
							origin: user_location,
							travelMode: google.maps.TravelMode.DRIVING
						};

						var directionsService = new google.maps.DirectionsService();

						directionsService.route(request, function(response, status) {
								if (status === google.maps.DirectionsStatus.OK) {
									// Display the route on the map.
									directionsDisplay.setDirections(response);
								}
							});

							marker.setMap(null);
					}

					google.maps.event.addDomListener(window, 'load', initialize);

			});
		</script>
	</head>
	<body onload="load()">
		<?php $this->load->view('/partials/header'); ?>
		<main>
			<div class="parallax-container">
				<div class="parallax"><img src="/assets/images/storefront_BW_copy.jpg" alt="salon"></div>
			</div>
			<div class="section intro row">
				<h1>H<sub>2</sub>O<sub>2</sub> ~ Doing business for over 30 years</h1>
				<div class="col s12 m6">
					<p>This fixture in Seattle's Capitol Hill neighborhood is locally-operated and female-owned.  Owner Chris Hornby has been welcoming clients for over 30 years!  Offering a wide variety of products and services, Chris and her team strive to give you the best salon experience possible and are conveniently located in the northern part of Capitol Hill.</p>
					<hr>
					<h6>Nearby Amenities:</h6>
					<ul>
						<li>Free Street Parking</li>
						<li>On a Bus Line (Metro #12)</li>
						<li>Coffee Shops</li>
						<li>Restaurants</li>
						<li>Public Parks (Volunteer and Interlaken)</li>
					</ul>
			  </div>
				<div class="col s12 m6">
					<img src="/assets/images/art2_BW.jpg" alt="artwork" />
				</div>
			</div>
			<div class="parallax-container">
				<div class="parallax"><img id="salon1" src="/assets/images/inside_BW_copy.jpg" alt="salon interior"></div>
			</div>
			<div class="section services row">
				<h1 id="services">Our Services</h1>
				<div class="service_div col s12 m6 l4 coloring">
					<h3>Coloring</h3>
					<ul>
						<li><b>Colors</b></li>
						<li>All Over Color</li>
						<li>Touch Up Color</li>
						<li>Color Correction</li>
					</ul>
					<ul>
						<li><b>Foils</b></li>
						<li>Full Foil</li>
						<li>Partial Foil</li>
						<li>Ombre</li>
					</ul>
				</div>
				<div class="service_div col s12 m6 l4 products">
					<h3>Products</h3>
					<ul>
						<li><u>Aveda</u>&#8482</li>
						<li>Shampoo & Conditioner</li>
						<li>Styling Products</li>
						<li>Skincare & Makeup</li>
					</ul>
					<ul>
						<li><u>Schwarkopf</u>&#8482</li>
						<li>Color</li>
						<li>Shampoo & Conditioner</li>
						<li>Styling Products</li>
					</ul>
				</div>
				<div class="service_div col s12 m6 l4 styling">
					<h3>Styling</h3>
					<ul>
						<li>Up-do's</li>
						<li>Blowouts</li>
						<li>Flat-Ironing</li>
						<li>Styling</li>
					</ul>
				</div>
				<div class="service_div col s12 m6 l4 waxing">
					<h3>Waxing</h3>
					<ul>
						<li>Eyebrows</li>
						<li>Upper Lip</li>
						<li>Chin</li>
					</ul>
				</div>
				<div class="service_div col s12 m6 l4 haircuts">
					<h3>Haircuts</h3>
					<ul>
						<li>Men's</li>
						<li>Women's</li>
						<li>Children's</li>
					</ul>
				</div>
				<div class="service_div col s12 m6 l4 perms">
					<h3>Perms</h3>
					<ul>
						<li>All-Over Perms</li>
						<li>Partial Perms</li>
						<li>Organic&#8482 Curl System</li>
					</ul>
				</div>
			</div>
			<div class="parallax-container">
				<div class="parallax"><img id="bottles" src="/assets/images/bottle_row_BW_copy.jpg" alt="aveda_shampoo_bottles"></div>
			</div>
			<div class="section about row">
				<h1 id="about">Our Team</h1>
				<div class="col s12 m3">
					<h4>Chris</h4>
					<hr>
					<p>Salon owner and stylist. She's 5' 10" and cool as hell.</p>
				</div>
				<div class="col s12 m3">
					<h4>Olivia</h4>
					<hr>
					<p>She's a total sweetheart with a bit of an edge, and is always down for some good tunes.</p>
				</div>
				<div class="col s12 m3">
					<h4>Kasey</h4>
					<hr>
					<p>She's fashionable and fun and up on her pop culture for sure.</p>
				</div>
				<div class="col s12 m3">
					<h4>Brittany</h4>
					<hr>
					<p>She's a world traveler out to save the world with some pretty cool stories.</p>
				</div>
			</div>
			<div class="parallax-container">
				<div class="parallax"><img id="salon2" src="/assets/images/inside2_BW_copy.jpg" alt="salon interior"></div>
			</div>
			<div class="section contact row">
				<h1>Contact Us</h1>
				<div class="col s12 m8">
					<div id="right-panel"></div>
					<div id="map"></div>
				</div>
				<div class="col s12 m4 contact_info">
					<h6>1900 East Aloha St, Seattle, WA 98112</h6>
					<p>Open Tuesday thru Friday and every other Saturday by appointment</p>
					<h6 class="hide-on-med-and-down">Phone: 206-329-3333</h6>
					<div class="directions_button center">
						<a id="directions" class="directions waves-effect waves-light btn-large hide-on-med-and-down">Directions</a>
						<a class="directions waves-effect waves-light btn hide-on-large-only" href="https://www.google.com/maps/place/H2O2/@47.6269551,-122.3092533,17z/data=!4m2!3m1!1s0x549014d5dc06cd0d:0x12d3fe70cb737b22" target="_blank">Directions</a>
				  </div>
				</div>
			</div>
		</main>
		<?php $this->load->view('/partials/footer'); ?>
	</body>
</html>
