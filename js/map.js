function initMap() {
	var uluru = {lat: 55.675757, lng: 12.562324};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 16,
		center: uluru
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map,
	});
}