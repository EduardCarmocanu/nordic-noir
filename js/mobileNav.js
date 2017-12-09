
var mobileTriggers = $("*[mobileTrigger]");

window.addEventListener('scroll', function () {
	for (var i = 0; i < mobileTriggers.length; i++) {
		if (window.pageYOffset > mobileTriggers[i].offsetTop - 50) {
			$("#hamburger").style.color = mobileTriggers[i].getAttribute('mobileTrigger');
		}
	}
});


var hamburgers = $('.hamburger');
for(i = 0;i<hamburgers.length; i++){
	hamburgers[i].addEventListener('click', function () {
		$('#smallNav').classList.toggle('navOpen');
		$('#smallNav').classList.toggle('navClosed');
	});
}
