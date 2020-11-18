var map;

function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {
			lat: -6.937930,
			lng: 107.595264
		},
		zoom: 8
	});
}
