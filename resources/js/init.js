var main = {
	init: function (){
		navigation.init();
		
		if ($('body').hasClass('accomodations')) {
			maps.init();
		}
	}
}

main.init();











