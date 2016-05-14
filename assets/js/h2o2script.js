
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

	//mobile windows...translating the salon images right a bit
	var win = $(window);
	if (win.width() <= 600){
		$('#bottles, #salon1').css('bottom','0px');
		$('#map, #right-panel').css('height', '200px');
		$('.parallax img').css('height', '450px');
	}

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

	$('.directions_button').on('click', '#directions', function (){
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
		//<a id="directions" class="directions waves-effect waves-light btn-large hide-on-med-and-down">Directions</a>
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