<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				<div class="contact-details">
					<h1 class="pb-4">CONTACT US</h1>
					<div class="location contact-item flex flex-align-center pa-1">
						<img src="/assets/icons/location-whtie.png" alt="">
						<h4>Ved Vesterport 2<br>1612 København V, Danmark</h4>
					</div>
					<div class="email contact-item flex flex-align-center pa-1">
						<img src="/assets/icons/mail-white.png" alt="">
						<h4>info@nordicnoirtours.dk</h4>
					</div>
					<div class="phone contact-item flex flex-align-center pa-1">
						<img src="/assets/icons/telephone-white.png" alt="">
						<h4>+45 11223344</h4>
					</div>
				</div>
				<div class="contact-text pb-3">
					<br>
					<p>All our tours start from Vesterport station.</p><br>
					<p>If you would like to enquire about a group tour, please specify the group size,<br>type of tour and preffered date/time and we will get back to you with the options</p>
				</div>
			</div>
		</section>
		<section id="map" class="full-width half-view-height"></section>
	</main>
	
	<?php include('partials/footer.php'); ?>
</body>