'use strict';

if (window.innerWidth > 768) {
	if (window.location.pathname === "/" || window.location.pathname === "/index.php") {
		$('nav')[0].classList.remove('active');
		$('nav')[0].classList.add('initial');

		var triggers = $('*[trigger]');
		
		function desktopNav () {
			for (var i = 0; i < triggers.length; i++) {
				if (window.pageYOffset > triggers[i].offsetTop - 50) {
					$('nav')[0].classList.add('active');
				}
				else {
					$('nav')[0].classList.remove('active');
				}
			}	
		}
		window.addEventListener('scroll', desktopNav);
	}
}


