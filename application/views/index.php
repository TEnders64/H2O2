<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>H2O2 Salon - Seattle</title>
		<meta name="description" content="Hair salon in Seattle's Capitol Hill neighborhood with services like perms, coloring, haircuts, waxing, and styling.  We are an Aveda and Schwarzkopf retailer as well.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="/assets/css/materialize.min.css">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="/assets/js/jquery-1.11.3.min.js"></script>
		<script src="/assets/js/materialize.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyB2a6yPTtz9dMjpVlooC_dPP0fBIh1Dod4"></script>
		<script src="/assets/js/h2o2script.js"></script>
		<script src="/assets/js/analytics.js"></script>
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
					<img src="/assets/images/art2_BW_small.jpeg" alt="artwork" />
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
						<li><b><u>Aveda</u>&#8482</b></li>
						<li>Shampoo & Conditioner</li>
						<li>Styling Products</li>
						<li>Skincare & Makeup</li>
					</ul>
					<ul>
						<li><b><u>Schwarkopf</u>&#8482</b></li>
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
				<div class="col s12 m4">
					<h4>Chris</h4>
					<hr>
					<p>Salon owner and stylist. She's 5' 10" and cool as hell.</p>
				</div>
				<div class="col s12 m4">
					<h4>Olivia</h4>
					<hr>
					<p>She's a total sweetheart with a bit of an edge, and is always down for some good tunes.</p>
				</div>
				<div class="col s12 m4">
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
					 	<a class="directions waves-effect waves-light btn hide-on-large-only" href="https://www.google.com/maps/place/H2O2/@47.6269551,-122.3092533,17z/data=!4m2!3m1!1s0x549014d5dc06cd0d:0x12d3fe70cb737b22" target="_blank">Directions</a>
				 	</div>
				</div>
			</div>
		</main>
		<?php $this->load->view('/partials/footer'); ?>
	</body>
</html>
