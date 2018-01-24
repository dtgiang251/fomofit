jQuery(document).ready(function($) {  
		if(POS_HOME_NEW_PAGINATION==null || POS_HOME_NEW_PAGINATION =="") {POS_HOME_NEW_PAGINATION = false} else { POS_HOME_NEW_PAGINATION = true}
		if(POS_HOME_NEW_NAV==null || POS_HOME_NEW_NAV =="") {POS_HOME_NEW_NAV = false} else {POS_HOME_NEW_NAV = true}
		var owl = $(".pos_new_product .newSlide");
			owl.owlCarousel({
			autoPlay : false ,
			smartSpeed: POS_HOME_NEW_SPEED,
			autoplayHoverPause: true,
			nav: POS_HOME_NEW_NAV,
			dots : POS_HOME_NEW_PAGINATION,	
			responsive:{
				0:{
					items:1,
				},
				480:{
					items:2,
				},
				768:{
					items:1,
				},
				992:{
					items:1,
				},
				1200:{
					items:POS_HOME_NEW_ITEMS,
				}
			}
		});
	});
