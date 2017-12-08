"use strict";

var questions = $('.question');
for (var i = 0; i < questions.length; i++) {
	// Binds function to click event on questions
	questions[i].addEventListener('click', function () {

		// Toggles class
		this.classList.toggle('question-active');

		// Changes the font awesome icon to either a minus or a plus
		if (this.classList.contains('question-active')) {
			this.children[0].children[0].classList = "fa fa-minus";
		}else {
			this.children[0].children[0].classList = "fa fa-plus";
		}
	});
}
