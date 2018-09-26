/*
	NAVIGATION LOGIC
*/

var navigation = {
	init: function () {
		$html = document.getElementsByTagName('html')[0];
		navigation.cE();
	},
	cE: function () {
		navigation.openBtn = $('.btn-nav-open');
		navigation.barTop = $('#bar-top');
		navigation.barMidL = $('#bar-mid-l');
		navigation.barMidR = $('#bar-mid-r');
		navigation.barBottom = $('#bar-bottom');
		navigation.menuIcon = $('#menu-icon');
		navigation.tl = new TimelineLite({
			paused:true,
		});
		
		TweenLite.defaultEase = Expo.easeInOut;
		
		navigation.tl
			.to(navigation.barTop, 0.2, {
				y: 5,
			})
			.to(navigation.barBottom, 0.2, {
				y: -5,
			},0)
			.to(navigation.barTop, 0.3, {
				rotation:45,
				y:0,
				x:10,
				transformOrigin:"left top",
			},0.15)
			.to(navigation.barBottom, 0.3, {
				rotation:-45,
				y:0,
				x:10,
				transformOrigin:"left bottom",
			},0.15)
			.to(navigation.barMidL, 0.4, {
				opacity:0,
				scaleX:0,
				transformOrigin:"left",
			}, 0)
			.to(navigation.barMidR, 0.4, {
				opacity:0,
				scaleX:0,
				transformOrigin:"right",
			}, 0)
			.to(navigation.menuIcon, 0.8, {
				rotation:90,
			}, 0.1)
		
		navigation.eL();
	},
	eL: function () {
		$(navigation.openBtn).on("click", function(e){
			e.preventDefault();
			if ($("body").hasClass('mobile--nav--open')){
				
				navigation.hideMobileNavigation();
				
			}  else {
				
				navigation.showMobileNavigation();
			}
			
		});
		
		$('#wedding-details-link').on('mouseenter', function (e) {
			e.preventDefault();
			$(this).addClass('showing--menu');
			
			navigation.showSubMenu();
		});
		
		$('#wedding-details-link').on("mouseleave", function (e) {
			e.preventDefault;
			var toElement = e.relatedTarget;
			
			console.log('toElement ', toElement, 'toElement CHILDREN', $(toElement).children('.subnav').length, 'toElement PARENTS', $(toElement).parents('.subnav').length);
			
			if ($(toElement).attr('class') === 'subnav-wrapper' || $(toElement).attr('class') === 'subnav' || $(toElement).children('.subnav').length > 0 || $(toElement).parents('.subnav').length > 0 || $(toElement).parents('.subnav-wrapper').length > 0){
				return;
			} else if ($("body").hasClass('show-hover-navigation')){
				navigation.hideSubMenu();
			}
		});
		
		$('.subnav-wrapper').on("mouseleave", function (e) {
			e.preventDefault;
			// console.log(e.currentTarget);
			navigation.hideSubMenu();
		});
		
		$('window').on('load', navigation.checkMenuItemOffset());
	},
	checkMenuItemOffset: function(){
		var offsetWithoutPx = navigation.getNavLinkOffsetLeft('#wedding-details-link');
		var offsetNew = offsetWithoutPx + 'px';
		
		$('.subnav-wrapper').css('left', offsetNew);
	},
	getNavLinkOffsetLeft: function getNavLinkOffsetLeft(link){
		var offset = $(link).offset();
		
		return offset.left;
	},
	showSubMenu: function(){
		$('.subnav-wrapper').addClass('show');
		$("body").addClass("show-hover-navigation");
	},
	hideSubMenu: function(e){
		$('.showing--menu').removeClass('showing--menu');
		
		$("body").removeClass("show-hover-navigation");
		
		$('.subnav-wrapper').removeClass('show');
	},
	showMobileNavigation: function(){
		navigation.tl.play();
		navigation.addBodyClass();
	},
	hideMobileNavigation: function(){
		navigation.tl.reverse();
		navigation.removeBodyClass();
	},
	addBodyClass: function addBodyClass(){
		$html.classList.add('mobile--nav--is--open');
		$('body').addClass('mobile--nav--open');
	},
	removeBodyClass: function removeBodyClass(){
		$('body').removeClass('mobile--nav--open');
		$html.classList.remove('mobile--nav--is--open');
	}
}