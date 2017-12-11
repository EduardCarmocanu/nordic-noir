"use strict";

if (window.innerWidth < 768) {
	$('nav')[0].classList.remove('active');
	$('nav')[0].classList.add('initial');
	
	if (window.location.pathname === '/' || window.location.pathname === '/index.php') {
		function mobileNav() {
			var triggerPoints = $('*[mobileTrigger]');
			
			for (var i = 0; i < triggerPoints.length; i++) {
				if (window.pageYOffset > triggerPoints[i].offsetTop - 50) {
					$('.hamburger')[0].style.color = triggerPoints[i].getAttribute('mobileTrigger');
				}
			}
		}
		window.addEventListener('scroll', mobileNav);
	}
	else {
		$('nav')[0].style.backgroundColor = "#f8f8f8";
		$('.hamburger')[0].style.color = "#171717";
	}

}

var hamburgers = $('.hamburger');
for(var i = 0; i < hamburgers.length; i++){
	hamburgers[i].addEventListener('click', function () {
		$('.small-nav')[0].classList.toggle('navOpen');
		$('.small-nav')[0].classList.toggle('navClosed');
	});
}
