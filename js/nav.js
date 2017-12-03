function setNavigationBar() {
	if (window.pageYOffset > triggerPoint.offsetTop) {
		$('nav')[0].style.backgroundColor = '#f8f8f8';
	}
}

var triggerPoints = $('*[trigger]');
var nav = $('nav')[0];

function setNavigationBar() {
	for (var i = 0; i < triggerPoints.length; i++) {
		if (window.pageYOffset > triggerPoints[i].offsetTop) {
			// Sets the value of the trigger attribute to the background color
			nav.style.backgroundColor = triggerPoints[i].getAttribute('trigger');
			for (var x = 0; x < $('nav ul li').length; x++) {
				$('nav ul a')[x].style.color = 'black';
			}
		}
		else {
			for (var x = 0; x < $('nav ul li').length; x++) {
				$('nav ul a')[x].style.color = 'white';
			}
		}
	}
}
window.addEventListener('scroll', setNavigationBar);

$('nav')[0].style.position = 'fixed';
$('nav')[0].classList.add('initial');