<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<script src="https://use.fontawesome.com/96a62ba6a5.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/landing.css">
</head>

<body class="no-overflow-x">

	<?php
	include('partials/navbar.html');
	?>

	<main>
		<section class="
		first-section 
		flex 
		flex-justify-center 
		flex-align-center 
		text-center
		full-view-width-height
		has-background">
			<h1>FROM SCANDINAVIA WITH CRIME</h1>
			<a href="/tours">BOOK A TOUR</a>
		</section>
		<section class="second-section 
		text-center 
		pt-2 
		pb-2">
			<h2>Who are we?</h2>
			<p>We offer tours based on the scandinavian crime series Borgen, The Bridge and The Killing</p>

			<section class="tours-cards-section flex flex-justify-center flex-align-center pt-2 pb-2">
				<section>
					<h4>TEXT</h4>
				</section>
				<section class="special">
					<h4>TEXT</h4>
				</section>
				<section>
					<h4>TEXT</h4>
				</section>
			</section>
			<a href="/tours" class="CTA-button">View More</a>

		</section>

		<section class="third-section pt-2 pb-2 full-view-width">
			<section class="info text-center">
				<h1>Info</h1>
			</section>

			<section class="image-gallery flex flex-justify-space-between">
				<figure>
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAYFBMVEXIqnjGp3PGpnHHqHXJq3rv59vSupPFpW7Tu5bs4tTPtYvq38/o3MrQt4/ax6jDomrXwqHLr4LezbLy6+D28uvg0LjZxaXj1b/Lr4DBnmL38+38+/j+/fzg0Lfdy6/VvpvJjk0LAAACdUlEQVR4nO3VzXajOBCGYUpCCAnxIySQ4yRw/3fZwul0ehZzZnZxn36fBeBy4cNnCtQ0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgz6b/u0Pk/7Q9q/b8vHb5lw7dHcftV5v+bFe2Hqlr/3WirTUt/6x9u2jsdU0icvjHzapHovV1WPdXQQ1hy9HMj+90v8hVbHS6d3Iztk33Ra7cV/Geo+qCUsO9PE/E6JaltM22Sn6XUlrZ9mlZeh8mu74v+1YThnEeerftImtRg7HbVtNPh139a5q3wyZbc6t3LaWLy/kWbD+8pO/O9SW6oZyuHMPiznAc5QjFBBfTaPxbd5/KKir0TfJvZ4pHWMNRtlKKqOLurahkx7ZJtmnzWmtmSFr5oKKf8/M8tzVhlDTlfQ5js7ng2tYEr3zJXXpJcx9qwnuebuYljEnZtKxptkkpN8VrRJX4+1hHdHqdG5v9Hq4p1W06nmlKB6+Tv5kleHf6YYiPhPlWasI8n1dCbyW6+g+YpiY86lAaJWWcc01oY25sneTy2jbKWe9sTSipm78715doXE24uuRDHVBX75yrmVXe8pofCet7o9O1bQ59n9y2uN2YSfSY6ratz6Epm2ifOiOymNRLN9g+l/A8U9p29UnqVT/KbdRLe/pudP6m49l2vfS6FvV4u9pkvMl4qqu3v16rY1+Xil7GfV904706a63+SlPPiPs+fXeu31wLnP7cNrLkfAXQj9Kj+LHYf3z41ftzYbyWP/m4Xfqr1nwsKE9KYnyeAQMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwd/sBYRgcvEHNGsMAAAAASUVORK5CYII="
					 alt="" class="full-width">
				</figure>
				<figure>
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAYFBMVEXIqnjGp3PGpnHHqHXJq3rv59vSupPFpW7Tu5bs4tTPtYvq38/o3MrQt4/ax6jDomrXwqHLr4LezbLy6+D28uvg0LjZxaXj1b/Lr4DBnmL38+38+/j+/fzg0Lfdy6/VvpvJjk0LAAACdUlEQVR4nO3VzXajOBCGYUpCCAnxIySQ4yRw/3fZwul0ehZzZnZxn36fBeBy4cNnCtQ0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgz6b/u0Pk/7Q9q/b8vHb5lw7dHcftV5v+bFe2Hqlr/3WirTUt/6x9u2jsdU0icvjHzapHovV1WPdXQQ1hy9HMj+90v8hVbHS6d3Iztk33Ra7cV/Geo+qCUsO9PE/E6JaltM22Sn6XUlrZ9mlZeh8mu74v+1YThnEeerftImtRg7HbVtNPh139a5q3wyZbc6t3LaWLy/kWbD+8pO/O9SW6oZyuHMPiznAc5QjFBBfTaPxbd5/KKir0TfJvZ4pHWMNRtlKKqOLurahkx7ZJtmnzWmtmSFr5oKKf8/M8tzVhlDTlfQ5js7ng2tYEr3zJXXpJcx9qwnuebuYljEnZtKxptkkpN8VrRJX4+1hHdHqdG5v9Hq4p1W06nmlKB6+Tv5kleHf6YYiPhPlWasI8n1dCbyW6+g+YpiY86lAaJWWcc01oY25sneTy2jbKWe9sTSipm78715doXE24uuRDHVBX75yrmVXe8pofCet7o9O1bQ59n9y2uN2YSfSY6ratz6Epm2ifOiOymNRLN9g+l/A8U9p29UnqVT/KbdRLe/pudP6m49l2vfS6FvV4u9pkvMl4qqu3v16rY1+Xil7GfV904706a63+SlPPiPs+fXeu31wLnP7cNrLkfAXQj9Kj+LHYf3z41ftzYbyWP/m4Xfqr1nwsKE9KYnyeAQMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwd/sBYRgcvEHNGsMAAAAASUVORK5CYII="
					 alt="" class="full-width">
				</figure>
				<figure>
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAYFBMVEXIqnjGp3PGpnHHqHXJq3rv59vSupPFpW7Tu5bs4tTPtYvq38/o3MrQt4/ax6jDomrXwqHLr4LezbLy6+D28uvg0LjZxaXj1b/Lr4DBnmL38+38+/j+/fzg0Lfdy6/VvpvJjk0LAAACdUlEQVR4nO3VzXajOBCGYUpCCAnxIySQ4yRw/3fZwul0ehZzZnZxn36fBeBy4cNnCtQ0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgz6b/u0Pk/7Q9q/b8vHb5lw7dHcftV5v+bFe2Hqlr/3WirTUt/6x9u2jsdU0icvjHzapHovV1WPdXQQ1hy9HMj+90v8hVbHS6d3Iztk33Ra7cV/Geo+qCUsO9PE/E6JaltM22Sn6XUlrZ9mlZeh8mu74v+1YThnEeerftImtRg7HbVtNPh139a5q3wyZbc6t3LaWLy/kWbD+8pO/O9SW6oZyuHMPiznAc5QjFBBfTaPxbd5/KKir0TfJvZ4pHWMNRtlKKqOLurahkx7ZJtmnzWmtmSFr5oKKf8/M8tzVhlDTlfQ5js7ng2tYEr3zJXXpJcx9qwnuebuYljEnZtKxptkkpN8VrRJX4+1hHdHqdG5v9Hq4p1W06nmlKB6+Tv5kleHf6YYiPhPlWasI8n1dCbyW6+g+YpiY86lAaJWWcc01oY25sneTy2jbKWe9sTSipm78715doXE24uuRDHVBX75yrmVXe8pofCet7o9O1bQ59n9y2uN2YSfSY6ratz6Epm2ifOiOymNRLN9g+l/A8U9p29UnqVT/KbdRLe/pudP6m49l2vfS6FvV4u9pkvMl4qqu3v16rY1+Xil7GfV904706a63+SlPPiPs+fXeu31wLnP7cNrLkfAXQj9Kj+LHYf3z41ftzYbyWP/m4Xfqr1nwsKE9KYnyeAQMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwd/sBYRgcvEHNGsMAAAAASUVORK5CYII="
					 alt="" class="full-width">
				</figure>
				<figure>
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAYFBMVEXIqnjGp3PGpnHHqHXJq3rv59vSupPFpW7Tu5bs4tTPtYvq38/o3MrQt4/ax6jDomrXwqHLr4LezbLy6+D28uvg0LjZxaXj1b/Lr4DBnmL38+38+/j+/fzg0Lfdy6/VvpvJjk0LAAACdUlEQVR4nO3VzXajOBCGYUpCCAnxIySQ4yRw/3fZwul0ehZzZnZxn36fBeBy4cNnCtQ0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgz6b/u0Pk/7Q9q/b8vHb5lw7dHcftV5v+bFe2Hqlr/3WirTUt/6x9u2jsdU0icvjHzapHovV1WPdXQQ1hy9HMj+90v8hVbHS6d3Iztk33Ra7cV/Geo+qCUsO9PE/E6JaltM22Sn6XUlrZ9mlZeh8mu74v+1YThnEeerftImtRg7HbVtNPh139a5q3wyZbc6t3LaWLy/kWbD+8pO/O9SW6oZyuHMPiznAc5QjFBBfTaPxbd5/KKir0TfJvZ4pHWMNRtlKKqOLurahkx7ZJtmnzWmtmSFr5oKKf8/M8tzVhlDTlfQ5js7ng2tYEr3zJXXpJcx9qwnuebuYljEnZtKxptkkpN8VrRJX4+1hHdHqdG5v9Hq4p1W06nmlKB6+Tv5kleHf6YYiPhPlWasI8n1dCbyW6+g+YpiY86lAaJWWcc01oY25sneTy2jbKWe9sTSipm78715doXE24uuRDHVBX75yrmVXe8pofCet7o9O1bQ59n9y2uN2YSfSY6ratz6Epm2ifOiOymNRLN9g+l/A8U9p29UnqVT/KbdRLe/pudP6m49l2vfS6FvV4u9pkvMl4qqu3v16rY1+Xil7GfV904706a63+SlPPiPs+fXeu31wLnP7cNrLkfAXQj9Kj+LHYf3z41ftzYbyWP/m4Xfqr1nwsKE9KYnyeAQMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwd/sBYRgcvEHNGsMAAAAASUVORK5CYII="
					 alt="" class="full-width">
				</figure>

				<figure>
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAYFBMVEXIqnjGp3PGpnHHqHXJq3rv59vSupPFpW7Tu5bs4tTPtYvq38/o3MrQt4/ax6jDomrXwqHLr4LezbLy6+D28uvg0LjZxaXj1b/Lr4DBnmL38+38+/j+/fzg0Lfdy6/VvpvJjk0LAAACdUlEQVR4nO3VzXajOBCGYUpCCAnxIySQ4yRw/3fZwul0ehZzZnZxn36fBeBy4cNnCtQ0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgz6b/u0Pk/7Q9q/b8vHb5lw7dHcftV5v+bFe2Hqlr/3WirTUt/6x9u2jsdU0icvjHzapHovV1WPdXQQ1hy9HMj+90v8hVbHS6d3Iztk33Ra7cV/Geo+qCUsO9PE/E6JaltM22Sn6XUlrZ9mlZeh8mu74v+1YThnEeerftImtRg7HbVtNPh139a5q3wyZbc6t3LaWLy/kWbD+8pO/O9SW6oZyuHMPiznAc5QjFBBfTaPxbd5/KKir0TfJvZ4pHWMNRtlKKqOLurahkx7ZJtmnzWmtmSFr5oKKf8/M8tzVhlDTlfQ5js7ng2tYEr3zJXXpJcx9qwnuebuYljEnZtKxptkkpN8VrRJX4+1hHdHqdG5v9Hq4p1W06nmlKB6+Tv5kleHf6YYiPhPlWasI8n1dCbyW6+g+YpiY86lAaJWWcc01oY25sneTy2jbKWe9sTSipm78715doXE24uuRDHVBX75yrmVXe8pofCet7o9O1bQ59n9y2uN2YSfSY6ratz6Epm2ifOiOymNRLN9g+l/A8U9p29UnqVT/KbdRLe/pudP6m49l2vfS6FvV4u9pkvMl4qqu3v16rY1+Xil7GfV904706a63+SlPPiPs+fXeu31wLnP7cNrLkfAXQj9Kj+LHYf3z41ftzYbyWP/m4Xfqr1nwsKE9KYnyeAQMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwd/sBYRgcvEHNGsMAAAAASUVORK5CYII="
					 alt="" class="full-width">
				</figure>
				<figure>
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAYFBMVEXIqnjGp3PGpnHHqHXJq3rv59vSupPFpW7Tu5bs4tTPtYvq38/o3MrQt4/ax6jDomrXwqHLr4LezbLy6+D28uvg0LjZxaXj1b/Lr4DBnmL38+38+/j+/fzg0Lfdy6/VvpvJjk0LAAACdUlEQVR4nO3VzXajOBCGYUpCCAnxIySQ4yRw/3fZwul0ehZzZnZxn36fBeBy4cNnCtQ0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgz6b/u0Pk/7Q9q/b8vHb5lw7dHcftV5v+bFe2Hqlr/3WirTUt/6x9u2jsdU0icvjHzapHovV1WPdXQQ1hy9HMj+90v8hVbHS6d3Iztk33Ra7cV/Geo+qCUsO9PE/E6JaltM22Sn6XUlrZ9mlZeh8mu74v+1YThnEeerftImtRg7HbVtNPh139a5q3wyZbc6t3LaWLy/kWbD+8pO/O9SW6oZyuHMPiznAc5QjFBBfTaPxbd5/KKir0TfJvZ4pHWMNRtlKKqOLurahkx7ZJtmnzWmtmSFr5oKKf8/M8tzVhlDTlfQ5js7ng2tYEr3zJXXpJcx9qwnuebuYljEnZtKxptkkpN8VrRJX4+1hHdHqdG5v9Hq4p1W06nmlKB6+Tv5kleHf6YYiPhPlWasI8n1dCbyW6+g+YpiY86lAaJWWcc01oY25sneTy2jbKWe9sTSipm78715doXE24uuRDHVBX75yrmVXe8pofCet7o9O1bQ59n9y2uN2YSfSY6ratz6Epm2ifOiOymNRLN9g+l/A8U9p29UnqVT/KbdRLe/pudP6m49l2vfS6FvV4u9pkvMl4qqu3v16rY1+Xil7GfV904706a63+SlPPiPs+fXeu31wLnP7cNrLkfAXQj9Kj+LHYf3z41ftzYbyWP/m4Xfqr1nwsKE9KYnyeAQMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwd/sBYRgcvEHNGsMAAAAASUVORK5CYII="
					 alt="" class="full-width">
				</figure>
				<figure class="bigger">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAYFBMVEXIqnjGp3PGpnHHqHXJq3rv59vSupPFpW7Tu5bs4tTPtYvq38/o3MrQt4/ax6jDomrXwqHLr4LezbLy6+D28uvg0LjZxaXj1b/Lr4DBnmL38+38+/j+/fzg0Lfdy6/VvpvJjk0LAAACdUlEQVR4nO3VzXajOBCGYUpCCAnxIySQ4yRw/3fZwul0ehZzZnZxn36fBeBy4cNnCtQ0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgz6b/u0Pk/7Q9q/b8vHb5lw7dHcftV5v+bFe2Hqlr/3WirTUt/6x9u2jsdU0icvjHzapHovV1WPdXQQ1hy9HMj+90v8hVbHS6d3Iztk33Ra7cV/Geo+qCUsO9PE/E6JaltM22Sn6XUlrZ9mlZeh8mu74v+1YThnEeerftImtRg7HbVtNPh139a5q3wyZbc6t3LaWLy/kWbD+8pO/O9SW6oZyuHMPiznAc5QjFBBfTaPxbd5/KKir0TfJvZ4pHWMNRtlKKqOLurahkx7ZJtmnzWmtmSFr5oKKf8/M8tzVhlDTlfQ5js7ng2tYEr3zJXXpJcx9qwnuebuYljEnZtKxptkkpN8VrRJX4+1hHdHqdG5v9Hq4p1W06nmlKB6+Tv5kleHf6YYiPhPlWasI8n1dCbyW6+g+YpiY86lAaJWWcc01oY25sneTy2jbKWe9sTSipm78715doXE24uuRDHVBX75yrmVXe8pofCet7o9O1bQ59n9y2uN2YSfSY6ratz6Epm2ifOiOymNRLN9g+l/A8U9p29UnqVT/KbdRLe/pudP6m49l2vfS6FvV4u9pkvMl4qqu3v16rY1+Xil7GfV904706a63+SlPPiPs+fXeu31wLnP7cNrLkfAXQj9Kj+LHYf3z41ftzYbyWP/m4Xfqr1nwsKE9KYnyeAQMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwd/sBYRgcvEHNGsMAAAAASUVORK5CYII="
					 alt="" class="full-width">
				</figure>
				<figure class="bigger">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAYFBMVEXIqnjGp3PGpnHHqHXJq3rv59vSupPFpW7Tu5bs4tTPtYvq38/o3MrQt4/ax6jDomrXwqHLr4LezbLy6+D28uvg0LjZxaXj1b/Lr4DBnmL38+38+/j+/fzg0Lfdy6/VvpvJjk0LAAACdUlEQVR4nO3VzXajOBCGYUpCCAnxIySQ4yRw/3fZwul0ehZzZnZxn36fBeBy4cNnCtQ0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgz6b/u0Pk/7Q9q/b8vHb5lw7dHcftV5v+bFe2Hqlr/3WirTUt/6x9u2jsdU0icvjHzapHovV1WPdXQQ1hy9HMj+90v8hVbHS6d3Iztk33Ra7cV/Geo+qCUsO9PE/E6JaltM22Sn6XUlrZ9mlZeh8mu74v+1YThnEeerftImtRg7HbVtNPh139a5q3wyZbc6t3LaWLy/kWbD+8pO/O9SW6oZyuHMPiznAc5QjFBBfTaPxbd5/KKir0TfJvZ4pHWMNRtlKKqOLurahkx7ZJtmnzWmtmSFr5oKKf8/M8tzVhlDTlfQ5js7ng2tYEr3zJXXpJcx9qwnuebuYljEnZtKxptkkpN8VrRJX4+1hHdHqdG5v9Hq4p1W06nmlKB6+Tv5kleHf6YYiPhPlWasI8n1dCbyW6+g+YpiY86lAaJWWcc01oY25sneTy2jbKWe9sTSipm78715doXE24uuRDHVBX75yrmVXe8pofCet7o9O1bQ59n9y2uN2YSfSY6ratz6Epm2ifOiOymNRLN9g+l/A8U9p29UnqVT/KbdRLe/pudP6m49l2vfS6FvV4u9pkvMl4qqu3v16rY1+Xil7GfV904706a63+SlPPiPs+fXeu31wLnP7cNrLkfAXQj9Kj+LHYf3z41ftzYbyWP/m4Xfqr1nwsKE9KYnyeAQMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwd/sBYRgcvEHNGsMAAAAASUVORK5CYII="
					 alt="" class="full-width">
				</figure>
			</section>
		</section>
	</main>

	<?php
	include('partials/footer.html');
	?>

	<script src="js/util.js"></script>
	<script src="js/main.js"></script>
</body>

</html>