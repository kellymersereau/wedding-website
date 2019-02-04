/*
 IMAGE SLIDER LOGIC
 */

var imageslider = {
	init: function () {
		imageslider.eL();
	},
	eL: function(){
		$(".slider").slick({
			dots: true,
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear'
		});
	},
	
	
};
