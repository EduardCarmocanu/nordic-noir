'use strict';

// checks windows width in order to avoid conflict with mobileNav.js
if (window.innerWidth > 893 && (window.location.pathname === "/" || window.location.pathname === "/index.php")) {
	// Check to see the window location is on the landing page
	// Sets the appropriate initial styling
	$('nav')[0].classList.remove('active');
	$('nav')[0].classList.add('initial');
	
	// Gets all the trigger point on the page
	var triggers = $('*[trigger]');
	
	// Binds function to the windows scroll event
	window.addEventListener('scroll', function () {
		
		// Runs through the triggers and compares window Y offset with trigger offset from top
		for (var i = 0; i < triggers.length; i++) {
			if (window.pageYOffset > triggers[i].offsetTop - 50) {
				$('nav')[0].classList.add('active');
			}
			else {
				$('nav')[0].classList.remove('active');
			}
		}	
	});
}


