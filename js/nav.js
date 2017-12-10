'use strict';

// Runs script on the DOM is loaded
document.addEventListener('DOMContentLoaded', function () {

	// Removes predefined component class "active" and adds initial
	$('nav')[0].classList.remove('active');
	$('nav')[0].classList.add('initial');

	// Checks the window width in order to avoid conflicts with mobileNav.js
	if (window.innerWidth > 768) {
		
		// Stored the elements that have the "trigger" attribute
		var triggerPoint = $('section[trigger]')[0];
		function setNavigationBar() {
			
			// Checks to see if windows reached trigger point
			if (window.pageYOffset > triggerPoint.offsetTop - 50) {
				$('nav')[0].classList.add('active');
				$('nav')[0].classList.remove('initial');
			}
			else {
				$('nav')[0].classList.remove('active');
				$('nav')[0].classList.add('initial');
			}
		}
		
	}
});


