'use strict';

var triggerPoint = $('section[trigger]')[0];

function setNavigationBar() {
	
	if (window.pageYOffset > triggerPoint.offsetTop - 50) {
		$('nav')[0].classList.add('active');
		$('nav')[0].classList.remove('initial');
	}
	else {
		$('nav')[0].classList.remove('active');
		$('nav')[0].classList.add('initial');
	}
}
window.addEventListener('scroll', setNavigationBar);

$('nav')[0].style.position = 'fixed';
$('nav')[0].classList.add('initial');