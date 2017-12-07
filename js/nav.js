'use strict';



if (window.innerWidth > 768) {


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

}else{

}