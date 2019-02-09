var main = {
	init: function (){
		navigation.init();
		
		if ( $('body').hasClass('our-story') ) {
			imageslider.init();
		}
	}
}

main.init();











