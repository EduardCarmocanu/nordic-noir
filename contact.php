<?php include "services/mailing_service.php" ?>

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
		<section class="contact-info">
			
			<div class="contact-info-wrapper">
				<div class="form-wrapper">
					<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
						<h1>CONTACT US</h1>
						<div class="form-group">
							<input type="name" name="name" id="name" required minlength="1" maxlength="78" placeholder="Full Name" autofocus value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
						</div>
						<div class="form-group">
							<input type="email" name="email" id="email"  placeholder="Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
						</div>
						<div class="form-group">
							<textarea name="message" id="message" required minlength="20" maxlength="2400" placeholder="Message"><?php echo isset($_POST['message']) ? htmlentities($message) : ''; ?></textarea>
						</div>
						<?php if (!empty($msg) && $msg != "") : ?>
							<p><?= $msg ?></p>
						<?php endif; ?>
						<div class="form-group">
							<input type="submit" name="submit" value="Send Message">		
						</div>
					</form>
				</div>

				<div class="contact-details">
					<div class="location contact-item">
						<img src="./assets/icons/location-whtie.png" alt="">
						<h4>Ved Vesterport 2<br>1612 København V, Danmark</h4>
					</div>
					<div class="email contact-item">
						<a href="mailto:info@nordicnoirtours.dk"><img src="./assets/icons/mail-white.png" alt=""></a>
						<a href="mailto:info@nordicnoirtours.dk"><h4>info@nordicnoirtours.dk</h4></a>
					</div>
					<div class="contact-text">
						<br>
						<p>
							All our tours start from Vesterport station.<br><br>
							If you would like to enquire about a group tour, please specify the group size, type of tour and preffered date/time and we will get back to you with the options
						</p>
					</div>
				</div>
			</div>
		</section>
		<section id="map"></section>
	</main>
	
	<?php include('partials/footer.php'); ?>
	<script src="js/map.js"></script>
	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBvpawVM7rEGLfuyalskHTc3SPr1_c2QI&callback=initMap"></script>	
</body>