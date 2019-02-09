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
		}, 1000);
	},
	initMap: function() {
		var asbury = {lat: 40.2252, lng: -73.9995};
		
		var map = new google.maps.Map(
			document.getElementById('map'), {zoom: 17, center: asbury});
		
		var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">The Berkeley Oceanfront Hotel</h1>'+
			'<div id="bodyContent">'+
			'<p>1401 Ocean Ave</p>' +
			'<p>Asbury Park, NJ 07712</p>'+
			'<a href="https://goo.gl/maps/GzcntjTj4n12" target="_blank">Get Directions</a>'+
			'</div>'+
			'</div>';
		
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		
		var marker = new google.maps.Marker({
			position: asbury,
			map: map,
			title: "The Berkeley Oceanfront Hotel"
		});
		
		marker.addListener('click', function() {
			infowindow.open(map, marker);
		});
		
	}
	
};

maps.init();