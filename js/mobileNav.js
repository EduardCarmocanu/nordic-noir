"use strict";

// Gets all triggers
var mobileTriggers = $("*[mobileTrigger]");

// Binds function to the scroll event on the window object
window.addEventListener('scroll', function () {

	// Runs through all the triggers
	for (var i = 0; i < mobileTriggers.length; i++) {
		if (window.pageYOffset > mobileTriggers[i].offsetTop - 50) {
			// Sets the color of the hamburger with the attribute data
			$(".hamburger")[0].style.color = mobileTriggers[i].getAttribute('mobileTrigger');
		}
	}
});

// gets the hamburger elements
var hamburgers = $('.hamburger');
// runs through all of them and bind anonymous function to their click event
for(var i = 0; i < hamburgers.length; i++){
	hamburgers[i].addEventListener('click', function () {
		// toggles functions needed for the right display
		$('.small-nav')[0].classList.toggle('navOpen');
		$('.small-nav')[0].classList.toggle('navClosed');
	});
}
