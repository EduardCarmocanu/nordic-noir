// Shorthand DOM element selector function
function $(selector) {
	if (selector[0] === '#') {
		
		return document.querySelector(selector);
	}
	return document.querySelectorAll(selector);

}