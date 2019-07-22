jQuery(document).ready(function($){
	"use strict";
	
	
	if($('.slide-out-div').length){
	$('.slide-out-div').tabSlideOut({
    tabHandle: '.handle',                              //class of the element that will be your tab
    pathToTabImage: 'images/gear.png',          //path to the image for the tab (optionaly can be set using css)
    imageHeight: '40px',                               //height of tab image
    imageWidth: '40px',                               //width of tab image    
    tabLocation: 'left',                               //side of screen where tab lives, top, right, bottom, or left
    speed: 300,                                        //speed of animation
    action: 'click',                                   //options: 'click' or 'hover', action to trigger animation
    topPos: '200px',                                   //position from the top
    fixedPosition: false                               //options: true makes it stick(fixed position) on scroll
    });
	}


	//Amazing New Stuff Scroll
	if($('.bestseller').length){
	$('.bestseller').bxSlider({
	minSlides: 3,
  	maxSlides: 3,
  	slideWidth: 225,
	pager:false,
  	slideMargin: 30
	});
	}
	
	
	//Amazing New Stuff Scroll
	if($('.partner-logo').length){
	$('.partner-logo').bxSlider({
	minSlides: 5,
  	maxSlides: 5,
  	slideWidth: 234,
	pager:false,
  	slideMargin: 0
	});
	}
	

		//Side bar Whats Hot
	if($('.special-pro').length){
	$('.special-pro').bxSlider({
	mode: 'fade',
	});
	}
	
	//Side bar Whats Hot
	if($('.blog-slider').length){
	$('.blog-slider').bxSlider({
	mode: 'fade',
    pager:false,
    captions: true
	});
	}

	//Testimonials Slider
	if($('.testi-slider').length){
	$('.testi-slider').bxSlider({
    pager:false,
    captions: true
	});
	}

	

	// Gray Image Hover
	if($('.percentage').length){
	$('.percentage').easyPieChart({
    animate: 1000,
    onStep: function(value) {
    this.$el.find('span').text(~~value);
    }
    });
	}


	if($('.vertical-slider').length){
	$('.vertical-slider').bxSlider({
    mode: 'vertical',
    slideWidth: 205,
    minSlides: 3,
	pager:false,
    slideMargin: 20
	});
	}
	
	
	if($('.pd-slider').length){
	$('.pd-slider').bxSlider({
	  pagerCustom: '#bx-pager'
	});
	}
	

	// Side According Navigation
	if($('#side-nav').length){
	$('#side-nav').metisMenu();

	}

	if($('#latest-pro').length){
	$('#latest-pro a:last').tab('show');
	}

	if($('.eventcountdown').length){
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
	$('.eventcountdown').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
	}
	
	if($('.eventcountdown2').length){
    var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 20);
	$('.eventcountdown2').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
	}
	
	if($('.eventcountdown3').length){
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 15);
	$('.eventcountdown3').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
	}
	
	if($('.eventcountdown4').length){
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 10);
	$('.eventcountdown4').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
	}
	
	if($('.eventcountdown5').length){
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 10);
	$('.eventcountdown5').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
	}
	
	
	if($('.eventcountdown6').length){
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 10);
	$('.eventcountdown6').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
	}
	
	

	
	

	if($('.news-slider').length){
	$('.news-slider').bxSlider({
    mode: 'vertical',
    minSlides: 3,
    slideMargin: 25,
	pager:false,
	auto:true,
	speed:5000,
	});
	}


	
	if($('#flexisel').length){
	$("#flexisel").flexisel({
        visibleItems: 6,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });
	}
	
	
	
	
	if($('#bestsellers').length){
	$("#bestsellers").flexisel({
        visibleItems: 3,
        animationSpeed: 1000,
        autoPlay: false,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 2
            }
        }
    });
	}


});





