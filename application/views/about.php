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
	<script>
		$(document).ready(function(){
			// console.log('ready');
			$('.parallax').parallax();
		})
	</script>
</head>
<body>
	<?php $this->load->view('/partials/header'); ?>
	<main>
		<div class="parallax-container">
			<div class="parallax"><img src="/assets/images/building.jpg" alt="salon"></div>
		</div>
		<div class="section grey lighten-2">
		    <div class="row container">
		      	<h2 class="header light-blue-text text-darken-4">Meet our team</h2>
		      	<div class="row">
		      		<?php for ($i = 0; $i < 3; $i++){ ?>
			      	<div class="col m4">
			      		<div class="card z-depth-2">
			      			<div class="card-image">
			      				<img src="/assets/images/invati.jpg" alt="brittany">
			      				<span class="card-title">Brittany Bear</span>
			      			</div>
			      			<div class="card-content">
			      				<p>Brittany has been with H<sub>2</sub>O<sub>2</sub> for over 8 years...</p>
			      			</div>
			      		</div>
			      	</div>
			      	<?php } ?>
			    </div>
		    </div>
		</div>
	</main>
	<div class="parallax-container">
		<div class="parallax"><img src="/assets/images/haircut.jpg" alt="haircut"></div>
	</div>
	<?php $this->load->view('/partials/footer'); ?>
</body>
</html>