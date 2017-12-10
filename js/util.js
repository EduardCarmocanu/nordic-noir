// Shorthand DOM element selector function
function $(selector) {
	if (selector[0] === '#') {
		return document.querySelector(selector)[0];
	}
	return document.querySelectorAll(selector);
}

// Shortfunction for loggin data to the console
function log(data) {
	console.log(data);
}