function $(selector) {
	if (selector[0] === '#') {
		return document.querySelector(selector);
	}
	return document.querySelectorAll(selector);
}

function log(data) {
	console.log(data);
}