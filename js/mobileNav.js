var hamburgers = $('.hamburger');

for(i = 0;i<hamburgers.length; i++){
	hamburgers[i].addEventListener('click', function () {
		$('#smallNav').classList.toggle('navOpen');
		$('#smallNav').classList.toggle('navClosed');
	});
}
