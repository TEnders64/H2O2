<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>H2O2 - Capitol Hill</title>
	<link rel="stylesheet" href="/assets/css/materialize.min.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="/assets/js/jquery-1.11.3.min.js"></script>
	<script src="/assets/js/materialize.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyB2a6yPTtz9dMjpVlooC_dPP0fBIh1Dod4"></script>
	<script>
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
		// accounting for fixed navbar covering the initial content when jumping from hash to hash
		function shiftWindow(){ 
			if (window.location.hash !== '#contact'){
				scrollBy(0, -70);
			}else{
				scrollBy(0, -30);
			}
		}
		window.addEventListener("hashchange", shiftWindow);
		function load() {
			if (window.location.hash) shiftWindow(); 
		}

		$(document).ready(function(){

			$(window).resize(function(){
				var win = $(window);
				if (win.width() > 860){
					$('.parallax').parallax();
					$('.parallax img').css('height', '1000px');
					$('.parallax img').css('bottom', '-150px');
					$('.parallax-container').css('height', '475px');
				}else{
					$('.parallax').parallax();
					$('.parallax img').css('height', '400px');
					$('.parallax img').css('bottom', '-50px');
					$('.parallax-container').css('height', '200px');
				}
			});

			var win = $(window);
			if (win.width() > 860){
				$('.parallax').parallax();
				$('.parallax img').css('height', '1000px');
				$('.parallax img').css('bottom', '-150px');
				$('.parallax-container').css('height', '475px');
			}else{
				$('.parallax').parallax();
				console.log('window width under 860!');
				$('.parallax img').css('height', '400px');
				$('.parallax img').css('bottom', '-50px');
				$('.parallax-container').css('height', '200px');
			}

			//activating the hamburger side nav
			$('.button-collapse').sideNav({
				menuWidth: 200,
				closeOnClick: true
			});

			$('li.icons div, h6.contact_info, ul#slide-out li').addClass('valign-wrapper');
			$('li.icons img, ul#slide-out a').addClass('valign');
			$('div.services div.bordering, div.about div, div.services_bottom div.bordering').addClass('hoverable');

			var map;
			var salon = {lat: 47.6270111, lng: -122.307025};

			function initialize(){
				var mapOptions = {
					center: salon,
					zoom: 14,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					panControl: false,
					scrollwheel: false
				}
				map = new google.maps.Map(document.getElementById('map'), mapOptions);

				var marker = new google.maps.Marker({
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
			}

			google.maps.event.addDomListener(window, 'load', initialize);

		})
	</script>
</head>
<body id="top" onload="load()">
	<?php $this->load->view('/partials/header'); ?>
	<main>
		<div class="parallax-container">
			<div class="parallax building"><img id="salon" src="/assets/images/storefront_BW.jpg" alt="salon"></div>
		</div>
		<div class="section intro z-depth-2">
		    <div class="row container">
		      	<div>
		      		<h3 class="header center">H<sub>2</sub>O<sub>2</sub> Salon ~ Doing business for over 30 years</h3>
		      		<p>H<sub>2</sub>O<sub>2</sub> has had the pleasure of doing business in Seattle's Capitol Hill neighborhood for over 30 years.  This fixture in northeast Capitol Hill is locally operated and female-owned.</p>
		      		<p>We at H2O2 strive to give you the best salon experience. Owner Chris Hornby has been welcoming clients for over 20 years in the Capitol Hill neighborhood of Seattle.  The salon is conveniently located in the northern part of Capitol Hill with plenty of free parking and amenities (coffee, food, and public parks) nearby.</p>
		      		<p>As an Aveda-branded salon, Chris and her team use only the finest of hair products for that hairstyle, which is all your own.</p>
		      	</div>
		    </div>
		</div>
		<div class="parallax-container">
			<div class="parallax salon"><img src="/assets/images/inside_BW.jpg" alt="salon_interior"></div>
		</div>
		<div class="section center z-depth-2">
			<div id="services" class="row services">
				<h3 class="header center">Services</h3>
				<div class="col l4 m4 s12">
					<div class="bordering">
						<img id="scissors" src="/assets/images/scissors2.png" alt="haircuts">
						<h5 class="title">Haircuts</h5>
						<p class="content">We Offer Men's, Women's and Children's Haircuts</p>
					</div>
				</div>
				<div class="col l4 m4 s12">
					<div class="bordering">
						<img src="/assets/images/brush.png" alt="coloring">
						<h5 class="title">Coloring</h5>
						<p class="content">Content</p>
					</div>
				</div>
				<div class="col l4 m4 s12">
					<div class="bordering">
						<img src="/assets/images/aveda-vector-logo.png" alt="aveda_products">
						<h5 class="title">Products</h5>
						<p class="content">Content</p>
					</div>
				</div>
			</div>
			<div class="row services_bottom">
				<div class="col l4 m4 s12">
					<div class="bordering">
						<img src="/assets/images/hair_silhouette2.png" alt="styling">
						<h5 class="title">Styling</h5>
						<p class="content">Content</p>
					</div>
				</div>
				<div class="col l4 m4 s12">
					<div class="bordering">
						<img src="/assets/images/eyebrow.png" alt="waxing">
						<h5 class="title">Waxing</h5>
						<p class="content">Content</p>
					</div>
				</div>
				<div class="col l4 m4 s12">
					<div class="bordering">
						<img id="perm" src="/assets/images/curl.png" alt="curl">
						<h5 class="title">Perms</h5>
						<p class="content">Content</p>
					</div>
				</div>
			</div>
		</div>
		<div class="parallax-container">
			<div class="parallax bottles"><img src="/assets/images/bottle_row_BW.jpg" alt="aveda_shampoo_bottles"></div>
		</div>
		<div class="section center z-depth-2">
			<div id="about" class="row about">
				<h3 class="header center">The Team</h3>
				<div class="col l3 m3 s12">
					<h5 class="stylist_name">Chris</h5>
					<hr>
					<p class="stylist_content">Salon owner and stylist. She's 5' 10" and cool as hell.</p>
				</div>
				<div class="col l3 m3 s12">
					<h5 class="stylist_name">Olivia</h5>
					<hr>
					<p class="stylist_content">She's a total sweetheart with a bit of an edge, and is always down for some good tunes.</p>
				</div>
				<div class="col l3 m3 s12">
					<h5 class="stylist_name">Kasey</h5>
					<hr>
					<p class="stylist_content">She's fashionable and fun and up on her pop culture for sure.</p>
				</div>
				<div class="col l3 m3 s12">
					<h5 class="stylist_name">Brittany</h5>
					<hr>
					<p class="stylist_content">She's a world traveler out to save the world with some pretty cool stories.</p>
				</div>
			</div>
		</div>
		<div class="parallax-container">
			<div class="parallax salon2"><img src="/assets/images/inside2_BW.jpg" alt="salon_interior2"></div>
		</div>
		<div class="section center z-depth-2">
			<div class="row contact">
				<h3 id="contact" class="header">Contact Us</h3>
				<div class="col s6 l10">
					<div id="right-panel"></div>
					<div id="map"></div>
				</div>
				<div class="col s6 l2 contact_info center">
					<h6>206-329-3333<hr>1900 East Aloha St, Seattle, WA 98112</h6>
					<a id="directions" class="waves-effect waves-light btn hide-on-small-only"><i class="material-icons left">navigation</i>Directions</a>
				</div>
			</div>
		</div>	
	</main>
	<?php $this->load->view('/partials/footer'); ?>
</body>
</html>