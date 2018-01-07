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
	
	<main mobileTrigger="#f8f8f8">
		<section class="first-section">
			<div>
				<h1 class="main-page-heading">FROM SCANDINAVIA<br>WITH CRIME</h1>
				<a href="tours.php" class="CTA-btn">View Tours</a>	
			</div>
		</section>
		<section class="second-section" trigger mobileTrigger="#171717">
			<div class="description center">
				<h2>Who are we?</h2>
				<p>We offer tours based on the popular Scandinavian crime series Borge, The Bridge and the Killing. With Nordic Noir Tours you have the opportunity to explore the locations where the crime misteries took place. <br>Take part in the adventure and join our tours.</p>
			</div>
			<h2>Tours</h2>
			<section class="tours-cards-section">
				<section>
					<h4 class="headline">THE KILLING</h4>
					<br>
					<h2 class="price">200 DKK</h2>
					<h4>Per Person</h4>
					<br>
					<h6>*if 6 or more in a group</h6>
					<br>
					<br>
					<h5>Early Reservation<br>
					Discount</h5>
					<a href="tours.php" class="CTA-btn-tours">View more</a>
				</section>
				<section class="special ">
					<h3 class="headline">BORGEN</h3>
					<br>
					<h2 class="price">200 DKK</h2>
					<h4>Per Person</h4>
					<br>
					<h6>*if 6 or more in a group</h6>
					<br>
					<br>
					<h5>Early Reservation<br>
					Discount</h5>
					<a href="tours.php" class="CTA-btn-tours">View more</a>
				</section>
				<section>
					<h4 class="headline">THE BRIDGE</h4>
					<br>
					<h2 class="price">300 DKK</h2>
					<h4>Per Person</h4>
					<br>
					<h6>*Booking and<br>prepayment required</h6>
					<br>
					<br>
					<h5>Early Reservation<br>
					Discount</h5>
					<a href="tours.php" class="CTA-btn-tours">View more</a>
				</section>
			</section>
			
		</section>
		<section class="third-section">
			<section class="nordic-noir-insta">
				<div class="round nordic-noir-profile-image"></div>
				<div class="insta-info">
					<h2>NORDIC NOIR TOURS</h2>
					<h4>Instagram</h4>
				</div>
			</section>
			
			<section class="image-gallery" id="feed">
		</section>
	</main>
	<div mobileTrigger="#f8f8f8"></div>

	<?php include('partials/footer.php'); ?>
	<script src="js/nav.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/instagram.js"></script>	


	<script>
		var o = {
        instaToken: "34438082.9842013.be3041f611984f6f80d294d0938a28dd",
        instaID: " 9842013962b24f0d956bd66356f15ce5",
        init: function() {
            jQuery.fn.spectragram.accessData = {
                accessToken: this.instaToken,
                clientID: this.instaID
            }, $("#feed").spectragram("getUserFeed", {
                max: 6,
                query: 'baldurarge',
				wrapEachWith: '<figure class="half-width pa-1 third-width no-overflow">'
            })
        }
    };
    o.init()
	</script>
	
</body>

</html>