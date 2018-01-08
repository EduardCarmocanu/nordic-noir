"use strict";

// check the window size in order to avoid conflicts with nav.js
if (window.innerWidth < 893) {

	// Sets the styling by adding CSS classe
	$('nav')[0].classList.remove('active');
	$('nav')[0].classList.add('initial');
	
	// Checks the window location in order to set the right behaviour
	if (window.location.pathname === '/' || window.location.pathname === '/index.php') {
		// Binds function to window scroll event
		window.addEventListener('scroll', function() {
			// Gets all the triggers in the current page
			var triggerPoints = $('*[mobileTrigger]');
			// Runs through the triggers and compares window Y offset with trigger offset
			for (var i = 0; i < triggerPoints.length; i++) {
				if (window.pageYOffset > triggerPoints[i].offsetTop - 50) {
					$('.hamburger')[0].style.color = triggerPoints[i].getAttribute('mobileTrigger');
				}
			}
		});
	}
	else {
		// Sets styling for other pages than the landing page 
		$('nav')[0].style.backgroundColor = "#f8f8f8";
		$('.hamburger')[0].style.color = "#171717";
	}

}
// Gets the mobile menu icons
var hamburgers = $('.hamburger');

// runs throught the icons and bind function to the click event
for(var i = 0; i < hamburgers.length; i++){
	hamburgers[i].addEventListener('click', function () {
		// toggles mobile navigation
		$('.small-nav')[0].classList.toggle('navOpen');
		$('.small-nav')[0].classList.toggle('navClosed');
	});
}
