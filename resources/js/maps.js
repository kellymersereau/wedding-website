/*
 HOTEL MAP LOGIC
*/

var maps = {
	init: function () {
		maps.eL();
	},
	eL: function(){
		window.setTimeout(function () {
			console.log('init map');
			maps.initMap();
		}, 2000);
	},
	initMap: function() {
		var map = new google.maps.Map(
			document.getElementById('map'), {zoom: 17, center: {lat: 40.2252, lng: -73.9995}});

		var marker = new google.maps.Marker({position: {lat: 40.2252, lng: -73.9995}, map: map});
	}
	
};