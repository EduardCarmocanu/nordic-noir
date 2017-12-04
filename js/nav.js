'use strict';

var socialIconsSrcs = {
	black: [
		'/assets/icons/facebook-logo.svgasd',
		'/assets/icons/twitter-logo-silhouette.svgasd',
		'/assets/icons/instagram-symbol.svgasd'
	],
	white: [
		'/assets/icons/facebook-logo.svg',
		'/assets/icons/twitter-logo-silhouette.svg',
		'/assets/icons/instagram-symbol.svg'
	]
};
var triggerPoint = $('section[trigger]')[0];

function setIcons(srcSet) {
	for (var i = 0; i < socialIconsSrcs.length; i++) {
		console.log($('.nav-icon')[0].src);
		$('.nav-icon')[i].style.backgroundImage = "url('" + srcSet[i] + "')";
	}
}
function setNavigationBar() {
	
	if (window.pageYOffset > triggerPoint.offsetTop - 50) {
		$('nav')[0].classList.add('active');
		$('nav')[0].classList.remove('initial');
		setIcons(socialIconsSrcs.black);
	}
	else {
		$('nav')[0].classList.remove('active');
		$('nav')[0].classList.add('initial');
		setIcons(socialIconsSrcs.white);
	}
}
window.addEventListener('scroll', setNavigationBar);

$('nav')[0].style.position = 'fixed';
$('nav')[0].classList.add('initial');