var main = {
	init: function (){
		navigation.init();
		
		if ($('body').hasClass('accommodations')) {
			maps.init();
		}
		
		if ( $('body').hasClass('our-story') ) {
			imageslider.init();
		}
	}
}

main.init();











