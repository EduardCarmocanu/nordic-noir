<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nordic-Noir Tours</title>
	<script src="https://use.fontawesome.com/96a62ba6a5.js"></script>
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<?php include('partials/navbar.php'); ?>
	<?php include('partials/tours-modal.php'); ?>
	
	<main>
		<section class="tours-wrapper">
			<div class="tour tour-wrapper no-overflow full-width text-center has-background white" id="tour-1">
				<div class="tour-content-wrapper relative full-height full-width">
					<h2 class="tour-name pt-5" id="0"></h2>	
				</div>
			</div>
			<div class="tour tour-wrapper no-overflow full-width text-center has-background white" id="tour-2">
				<div class="tour-content-wrapper relative full-height full-width">
					<h2 class="tour-name pt-5" id="1"></h2>	
				</div>
			</div>
			<div class="tour tour-wrapper no-overflow full-width text-center has-background white" id="tour-3">
				<div class="tour-content-wrapper relative full-height full-width">
					<h2 class="tour-name pt-5" id="2"></h2>	
				</div>
			</div>
			<div class="tour tour-wrapper no-overflow full-width text-center has-background white" id="tour-4">
				<div class="tour-content-wrapper relative full-height full-width">
					<h2 class="tour-name pt-5" id="3"></h2>	
				</div>
			</div>
		</section>		
	</main>
	
	<?php include('partials/footer.php'); ?>
	<script src="js/tours.js"></script>
</body>
</html>