"use strict";

var questions = $('.question');
for (var i = 0; i < questions.length; i++) {
	questions[i].addEventListener('click', function () {
		this.classList.toggle('question-active');
	});
}
