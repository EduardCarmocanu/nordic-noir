<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nordi-Noir</title>
	<script src="https://use.fontawesome.com/96a62ba6a5.js"></script>
	<link rel="stylesheet" href="./css/main.css">
</head>

<body>
	<?php include('partials/navbar.php'); ?>
	
	<main class="contact-main">
		<section class="contact-info full-width has-background white">
			<div class="contact-info-wrapper pl-5 pt-5 pb-5 full-width full-height">
				<h1 class="pl-1">CONTACT US</h1>
				<div class="flex flex-justify-space-between">
					<div class="contact-details pa-5 pl-1">
						<div class="location contact-item flex flex-align-center">
							<img src="./assets/icons/location-whtie.png" alt="">
							<h4>Ved Vesterport 2<br>1612 København V, Danmark</h4>
						</div>
						<div class="email contact-item flex flex-align-center pa-1">
							<a href="mailto:info@nordicnoirtours.dk"><img src="./assets/icons/mail-white.png" alt=""></a>
							<a href="mailto:info@nordicnoirtours.dk"><h4>info@nordicnoirtours.dk</h4></a>
						</div>
						<div class="contact-text pt-3">
							<br>
							<p>
								All our tours start from Vesterport station.<br><br>
								If you would like to enquire about a group tour, please specify the group size, type of tour and preffered date/time and we will get back to you with the options
							</p>
						</div>
					</div>	
				</div>
			</div>
		</section><section id="map" class="full-width half-view-height"></section>
	</main>
	
	<?php include('partials/footer.php'); ?>
	<script src="js/map.js"></script>
	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBvpawVM7rEGLfuyalskHTc3SPr1_c2QI&callback=initMap"></script>	
</body>