<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>H2O2 - Capitol Hill</title>
	<link rel="icon" href="<?php echo base_url(); ?>favicon.ico" type="image/gif">
	<link rel="stylesheet" href="/assets/css/materialize.min.css">
	<link rel="stylesheet" href="/assets/css/stylesheet2.css">
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
		//accounting for fixed navbar covering the initial content when jumping from hash to hash
		function shiftWindow(){
			if (window.location.hash !== '#contact'){
				scrollBy(0, -70);
			}else{
				scrollBy(0, -30);
			}
		}

		window.addEventListener("hashchange", shiftWindow);

		function load() {
			if (window.location.hash) {
				shiftWindow();
			}
		}

		$(document).ready(function(){

			$(window).resize(function(){
				var win = $(window);
				console.log(win.width());
				if (win.width() <= 320){
					$('div.parallax-container.building.first').css('height','450px');
					$('div.services div, div.services_bottom div').css('height', '240px');
					$('div.services div, div.services_bottom div').css('margin-bottom', '30px');
					$('div.services div, div.services_bottom div').css('margin-top', '10px');
					$('div.bordering img, div.bordering img#perm').css('width', '15%');
					$('div.bordering img, div.bordering img#perm').css('right', '-10%');
				}
				else if (win.width() < 400){
					$('div.parallax-container.building.first').css('height','450px');
					$('div.services div, div.services_bottom div').css('height', '220px');
					$('div.services div, div.services_bottom div').css('margin-bottom', '30px');
					$('div.services div, div.services_bottom div').css('margin-top', '10px');
					$('div.bordering img, div.bordering img#perm').css('width', '15%');
					$('div.bordering img, div.bordering img#perm').css('right', '-10%');
				}
				if (win.width() < 450){
					$('div.parallax-container.building.first').css('height','450px');

					$('div.services div, div.services_bottom div').css('height', '190px');
					$('div.services div, div.services_bottom div').css('margin-bottom', '30px');
					$('div.services div, div.services_bottom div').css('margin-top', '10px');
					$('div.bordering img, div.bordering img#perm').css('width', '15%');
					$('div.bordering img, div.bordering img#perm').css('right', '-10%');
				}
				else if (win.width() <= 600){
					// $('.parallax').parallax();
					console.log('between 600/450');
					$('div.services div, div.services_bottom div').css('height', '220px');
					$('div.bordering img, div.bordering img#perm').css('width', '15%');
					$('div.bordering img, div.bordering img#perm').css('right', '-10%');

					// $('div.services div, div.services_bottom div').css('margin-bottom', '30px');
					// $('div.services div, div.services_bottom div').css('margin-top', '0px');
					// $('#first_service_div').css('margin-top', '70px');
				}
				else{
					// conditions where width of window is greater than 600px...

					if (win.width() <= 992){
						// $('.parallax').parallax();
						$('div.services div, div.services_bottom div').css('margin-top', '30px');
						$('div.services div, div.services_bottom div').css('margin-bottom', '30px');
						$('div.services div').css('margin-top', '30px');
						$('div.services_bottom div').css('margin-top', '30px');
						$('div.services div, div.services_bottom div').css('height', '280px');

						$('.parallax img').css('height', '450px');
						// console.log('div.parallax-container.building.first');
						$('div.parallax-container').css('height', '480px')


						$('#building, #salon2').css('bottom', '0px');
						$('#salon1, #bottles').css('bottom', '0px');
						$('div.bordering img, div.bordering img#perm').css('width', '23%');
						$('div.bordering img, div.bordering img#perm').css('right', '-15%');
					}
					else if (win.width() > 992){
						$('.parallax img').css('height', '750px');
						$('div.parallax-container').css('height', '490px');

						$('#building, #salon2').css('bottom', '-50px');
						$('#salon1, #bottles').css('bottom', '-100px');
						// $('#first_service_div').css('margin-top', '10px');
						$('div.services div, div.services_bottom div').css('height', '230px');

						$('div.services div, div.services_bottom div').css('margin-top', '20px');

					}
					// else if (win.width() <= 910){
					// 	$('div.services div, div.services_bottom div').css('height', '260px');

					// }
					// else{
					// 	// $('.parallax').parallax();
					// 	// $('div.services div, div.services_bottom div').css('margin-bottom', '30px');
					// 	$('div.services div, div.services_bottom div').css('height', '220px');

					// 	// $('#first_service_div').css('margin-top', '0px');
					// }
				}
			});

			var win = $(window);
			if (win.width() <= 320){
				$('div.parallax-container.building.first').css('height','450px');
				$('div.services div, div.services_bottom div').css('height', '240px');
				$('div.services div, div.services_bottom div').css('margin-bottom', '30px');
				$('div.services div, div.services_bottom div').css('margin-top', '10px');
				$('div.bordering img, div.bordering img#perm').css('width', '15%');
				$('div.bordering img, div.bordering img#perm').css('right', '-10%');
			}
			else if (win.width() < 400){
				$('div.parallax-container.building.first').css('height','450px');
				$('div.services div, div.services_bottom div').css('height', '220px');
				$('div.services div, div.services_bottom div').css('margin-bottom', '30px');
				$('div.services div, div.services_bottom div').css('margin-top', '10px');
				$('div.bordering img, div.bordering img#perm').css('width', '15%');
				$('div.bordering img, div.bordering img#perm').css('right', '-10%');
			}
			else if (win.width() < 450){
				$('div.parallax-container.building.first').css('height','450px');
				$('div.services div, div.services_bottom div').css('height', '190px');
				$('div.services div, div.services_bottom div').css('margin-bottom', '30px');
				$('div.services div, div.services_bottom div').css('margin-top', '10px');
				$('div.bordering img, div.bordering img#perm').css('width', '15%');
				$('div.bordering img, div.bordering img#perm').css('right', '-10%');
			}
			//anything greater than 600 needs a new height!!!!
			else if (win.width() <= 600){
				// $('.parallax').parallax();
				console.log('between 600/450');
				// $('div.services div, div.services_bottom div').css('height', '272px');
				$('div.services div, div.services_bottom div').css('margin-top', '0px');
				// $('#first_service_div').css('margin-top', '70px');
				$('div.services div, div.services_bottom div').css('height', '220px');
				$('div.bordering img, div.bordering img#perm').css('width', '15%');
				$('div.bordering img, div.bordering img#perm').css('right', '-10%');

			}
			else{
				//conditions where window is wider than 600px...
				if (win.width() <= 992){
					// $('.parallax').parallax();

					$('div.services div, div.services_bottom div').css('height', '280px');
					$('div.services div, div.services_bottom div').css('margin-top', '30px');

					$('div.services div, div.services_bottom div').css('margin-bottom', '30px');
					$('div.services div').css('margin-top', '30px');
					$('div.services_bottom div').css('margin-top', '30px');

					$('.parallax img').css('height', '450px');
					$('div.parallax-container').css('height', '480px');
					$('#building, #salon2').css('bottom', '0px');
					$('#salon1, #bottles').css('bottom', '0px');

					$('div.bordering img, div.bordering img#perm').css('width', '23%');
					$('div.bordering img, div.bordering img#perm').css('right', '-15%');
					// $('.parallax-container').css('height', '300px');
				}
				else if (win.width() > 992){
					// $('.parallax').parallax();
					$('.parallax img').css('height', '750px');
					$('div.parallax-container').css('height', '490px');

					$('#building, #salon2').css('bottom', '-50px');
					$('#salon1, #bottles').css('bottom', '-100px');
					$('div.services div, div.services_bottom div').css('height', '230px');

					// $('#first_service_div').css('margin-top', '0px');

					$('div.services div, div.services_bottom div').css('margin-top', '20px');
				}
				// else{
				// 	// $('.parallax').parallax();
				// 	// $('div.services div, div.services_bottom div').css('height', 'auto');
				// 	$('div.services div, div.services_bottom div').css('height', '220px');

				// 	// $('div.services div, div.services_bottom div').css('margin-bottom', '30px');
				// 	// $('#first_service_div').css('margin-top', '0px');
				// }
			}

			//activating the hamburger side nav
			$('.button-collapse').sideNav({
				menuWidth: 200,
				closeOnClick: true
			});

			$('.parallax').parallax();
			$('li.icons div, h6.contact_info, ul#slide-out li').addClass('valign-wrapper');
			$('li.icons img, ul#slide-out a').addClass('valign');
			// $('div.services div.bordering, div.about div, div.services_bottom div.bordering').addClass('hoverable');

			//Google Maps Portion
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

		})
	</script>
</head>
<body id="top" onload="load()">
	<?php $this->load->view('/partials/header'); ?>
	<main>
		<div class="parallax-container building first">
			<div class="parallax"><img id="building" src="/assets/images/storefront_BW_copy.jpg" alt="salon"></div>
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
			<div class="parallax salon"><img id="salon1" src="/assets/images/inside_BW_copy.jpg" alt="salon_interior"></div>
		</div>
		<div class="section center z-depth-2">
			<div id="services" class="row services">
				<h3 class="header center">Services</h3>
				<div id="first_service_div" class="col l4 m4 s12">
					<div class="bordering">
						<img id="scissors" src="/assets/images/scissors2.png" alt="haircuts">
						<h5 class="title">Haircuts</h5>
						<hr>
						<ul class="content">
							<li class="flow-text">Men's</li>
							<li class="flow-text">Women's</li>
							<li class="flow-text">Children's</li>
						</ul>
					</div>
				</div>
				<div class="col l4 m4 s12">
					<div class="bordering product-container">
						<img src="/assets/images/aveda-vector-logo.png" alt="aveda_products">
						<h5 class="title">Products</h5>
						<hr>
						<ul class="content products">
							<li class="flow-text">Aveda&#8482</li>
							<li class="flow-text">Shampoo & Conditioner</li>
							<li class="flow-text">Styling Products</li>
							<li class="flow-text">Skincare & Makeup</li>
						</ul>
						<ul class="content products">
							<li class="flow-text">Schwarzkopf&#8482</li>
							<li class="flow-text">Color</li>
							<li class="flow-text">Shampoo & Conditioner</li>
							<li class="flow-text">Styling Products</li>
						</ul>
					</div>
				</div>
				<div class="col l4 m4 s12">
					<div class="bordering">
						<img src="/assets/images/brush.png" alt="coloring">
						<h5 class="title">Coloring</h5>
						<hr>
						<ul class="content coloring">
							<li class="flow-text">All Over Color</li>
							<li class="flow-text">Touch Up Color</li>
							<li class="flow-text">Color Correction</li>
						</ul>
						<ul class="content coloring">
							<li class="flow-text">Full Foil</li>
							<li class="flow-text">Partial Foil</li>
							<li class="flow-text">Ombre</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row services_bottom">
				<div class="col l4 m4 s12">
					<div class="bordering">
						<img src="/assets/images/hair_silhouette2.png" alt="styling">
						<h5 class="title">Styling</h5>
						<hr>
						<ul class="content">
							<li class="flow-text">Up-do's</li>
							<li class="flow-text">Blowouts</li>
							<li class="flow-text">Flat-Ironing</li>
							<li class="flow-text">Styling</li>
						</ul>
					</div>
				</div>
				<div class="col l4 m4 s12">
					<div class="bordering">
						<img src="/assets/images/eyebrow.png" alt="waxing">
						<h5 class="title">Waxing</h5>
						<hr>
						<ul class="content">
							<li class="flow-text">Eyebrows</li>
							<li class="flow-text">Upper Lip</li>
							<li class="flow-text">Chin</li>
						</ul>
					</div>
				</div>
				<div class="col l4 m4 s12">
					<div class="bordering">
						<img id="perm" src="/assets/images/curl.png" alt="curl">
						<h5 class="title">Perms</h5>
						<hr>
						<ul class="content">
							<li class="flow-text">All Over Perms</li>
							<li class="flow-text">Partial Perms</li>
							<li class="flow-text">Organic&#8482 Curl System</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="parallax-container">
			<div class="parallax bottles"><img id="bottles" src="/assets/images/bottle_row_BW_copy.jpg" alt="aveda_shampoo_bottles"></div>
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
			<div class="parallax salon2"><img id="salon2" src="/assets/images/inside2_BW_copy.jpg" alt="salon_interior2"></div>
		</div>
		<div class="section center z-depth-2">
			<div class="row contact">
				<h3 id="contact" class="header">Contact Us</h3>
				<div class="col s12 m8">
					<div id="right-panel"></div>
					<div id="map"></div>
				</div>
				<div class="col s12 m4 contact_info center">
					<h6>1900 East Aloha St, Seattle, WA 98112</h6>
					<p>Open Tuesday thru Friday and every other Saturday by appointment</p>
					<h6 class="hide-on-med-and-down">Phone: 206-329-3333</h6>
					<a id="directions" class="directions waves-effect waves-light btn-large hide-on-med-and-down">Directions</a>
					<a class="directions waves-effect waves-light btn hide-on-large-only" href="https://www.google.com/maps/place/H2O2/@47.6269551,-122.3092533,17z/data=!4m2!3m1!1s0x549014d5dc06cd0d:0x12d3fe70cb737b22" target="_blank">Directions</a>
				</div>
			</div>
		</div>
	</main>
	<?php $this->load->view('/partials/footer'); ?>
</body>
</html>
