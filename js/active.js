(function ($) {
    'use strict';

    var mona_window = $(window);

    // *******************************
    // :: 1.0 Preloader Active Code
    // *******************************

    /*mona_window.on('load', function () {
        $('#preloader').fadeOut('1000', function () {
            $(this).remove();
        });
    });*/

    // ***********************************
    // :: 2.0 Welcome Carousel Active Code
    // ***********************************

    if ($.fn.owlCarousel) {
        var welcomeSlider = $('.welcome-slides');
        welcomeSlider.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            autoplayTimeout: 7000,
            nav: false
        })
        welcomeSlider.on('translate.owl.carousel', function () {
            var layer = $("[data-animation]", this);
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });
        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });
        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });
        welcomeSlider.on('translated.owl.carousel', function () {
            var layer = welcomeSlider.find('.owl-item.active').find("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });
    }

    // ***********************************
    // :: 3.0 Post Carousel Active Code
    // ***********************************
    if ($.fn.owlCarousel) {
        var slidePost = $('.slide-post');
        slidePost.owlCarousel({
            items: 3,
			margin: 30,
            loop: true,
            autoplay: true,
            autoplayTimeout: 7000,
            smartSpeed: 1500,
			nav: false,
			responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
				601: {
                    items: 2
                },
                768: {
                    items: 3
                },
                901: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
    }

    // ***********************************
    // :: 4.0 Model Carousel Active Code
    // ***********************************
    if ($.fn.owlCarousel) {
        var sliderPost = $('.mona-all-model-slide');
        sliderPost.owlCarousel({
            items: 2,
            margin: 53,
            loop: false,
            autoplay: true,
            autoplayTimeout: 7000,
            smartSpeed: 1500,
            nav: true,
            responsive: {
                0: {
                    items: 1,
					nav: false
                },
                480: {
                    items: 1,
					nav: false
                },
				601: {
                    items: 2,
					nav: false
                },
                768: {
                    items: 2,
					nav: false
                },
                992: {
                    items: 2,
					nav: false
                },
                1200: {
                    items: 2,
                }
            }
        });
    }

    // ***********************************
    // :: 6.0 Slick Slider Active Code
    // ***********************************
    if ($.fn.slick) {
        $('.autoplay').slick({
			dots: true,
			speed: 2000,
            arrows: false,
			autoplay: true,
			pauseOnHover: false,
			autoplayTimeout: 7000,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
		{

      		breakpoint: 1024,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 901,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 768,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 2,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 600,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 480,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		}
		]
		});
    }
	
	// ***********************************
    // :: 8.0 Slick Slider Active Code
    // ***********************************	
	if ($.fn.slick) {
        $('.fade').slick({
			dots: false,
			speed: 2000,
            arrows: true,
			autoplay: true,
			pauseOnHover: false,
			autoplayTimeout: 7000,
			slidesToShow: 2,
			slidesToScroll: 1,
			responsive: [
		{
      		breakpoint: 1024,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 901,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 768,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 2,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 600,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 480,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		}
		]
		});
    }

	// ***********************************
    // :: 7.0 Slick Slider Active Code
    // ***********************************	
	if ($.fn.slick) {
		$('.slider-for').slick({
			dots: true,
			speed: 2000,
            arrows: false,
			autoplay: true,
			pauseOnHover: false,
			autoplayTimeout: 7000,
			slidesToShow: 1,
			slidesToScroll: 1,
			asNavFor: '.slider-nav',
			responsive: [
		{

      		breakpoint: 1024,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 901,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 768,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 600,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 480,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		}
		]
		});
		$('.slider-nav').slick({
			dots: false,
			fade: false,
			speed: 2000,
            arrows: false,
			autoplay: true,
			centerMode: false,
			focusOnSelect: true,
			pauseOnHover: false,
			autoplayTimeout: 7000,
			slidesToShow: 1,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			responsive: [
		{
      		breakpoint: 1024,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 901,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 768,
			settings: {
			dots: false,
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 600,
			settings: {
			dots: false,
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 480,
			settings: {
			dots: false,
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		}
		]
		});
    }

	// ***********************************
    // :: 9.0 Slick Slider Active Code
    // ***********************************	
	if ($.fn.slick) {
        $('.lazy').slick({
			dots: false,
			speed: 2000,
            arrows: false,
			autoplay: true,
			pauseOnHover: false,
			autoplayTimeout: 7000,
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
		{
      		breakpoint: 1024,
			settings: {
			slidesToShow: 4,
			slidesToScroll: 1
		}
		},
		{
      		breakpoint: 901,
			settings: {
			slidesToShow: 4,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 768,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 3,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 600,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 3,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 480,
			settings: {
			dots: true,
			arrows: false,
			slidesToShow: 2,
			slidesToScroll: 1
		}
		}
		]
		});
    }
	
	// ***********************************
    // :: 10.0 Slick Slider Active Code
    // ***********************************	
	if ($.fn.slick) {
        $('.one-time').slick({
			dots: false,
			speed: 2000,
            arrows: false,
			autoplay: true,
			pauseOnHover: false,
			autoplayTimeout: 7000,
			slidesToShow: 1,
			slidesToScroll: 1,
			responsive: [
		{
      		breakpoint: 1024,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 901,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 768,
			settings: {
			dots: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 600,
			settings: {
			dots: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 480,
			settings: {
			dots: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		}
		]
		});
    }
	
	// ***********************************
    // :: 11.0 Slick Slider Active Code
    // ***********************************	
	if ($.fn.slick) {
        $('.variable-width').slick({
			dots: false,
			speed: 2000,
			autoplayTimeout: 7000,
            arrows: false,
			autoplay: true,
			pauseOnHover: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
		{
      		breakpoint: 1024,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		}
		},
		{
      		breakpoint: 901,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 768,
			settings: {
			dots: true,
            arrows: false,
			slidesToShow: 2,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 600,
			settings: {
			dots: true,
            arrows: false,
			slidesToShow: 2,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 480,
			settings: {
			dots: true,
            arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		}
		]
		});
    }
	
	// ***********************************
    // :: 12.0 Slick Slider Active Code
    // ***********************************
    if ($.fn.slick) {
        $('.responsive').slick({
			dots: false,
			fade: false,
            arrows: false,
			autoplay: true,
            speed: 2000,
			slidesToShow: 4,
			slidesToScroll: 1,
			pauseOnHover: false,
			variableWidth: false,
			autoplayTimeout: 7000,
			responsive: [
		{
      		breakpoint: 1024,
			settings: {
			slidesToShow: 4,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 900,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 767,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			variableWidth: false
		}
		},
		{
			breakpoint: 600,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			variableWidth: false
		}
		},
		{
			breakpoint: 480,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			variableWidth: false
		}
		}
		]
		});
    }
	
	
	// ***********************************
    // :: 13.0 Slick Slider Active Code
    // ***********************************	
	if ($.fn.slick) {
        $('.single-item').slick({
			dots: false,
			speed: 2000,
			autoplayTimeout: 7000,
            arrows: false,
			autoplay: true,
			pauseOnHover: false,

			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
		{
      		breakpoint: 1024,
			settings: {
			slidesToShow: 4,
			slidesToScroll: 1
		}
		},
		{
      		breakpoint: 901,
			settings: {
			slidesToShow: 4,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 768,
			settings: {
			slidesToShow: 4,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 600,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 480,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
		}
		]
		});
    }
	
    
    // ***********************************
    // :: 14.0 Slick Slider Active Code
    // ***********************************	
	if ($.fn.slick) {
        $('.multiple-items').slick({
			dots: false,
			speed: 2000,
			autoplayTimeout: 7000,
            arrows: false,
			autoplay: true,
			pauseOnHover: false,
            draggable: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
		{
      		breakpoint: 1024,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		}
		},
		{
      		breakpoint: 901,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 768,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 600,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		}
		},
		{
			breakpoint: 480,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
		}
		]
		});
    }
    
	// ***********************************
    // :: 15.0 WOW Active Code
    // ***********************************
    /*if (mona_window.width() > 767) {
        new WOW().init();
    }*/

	 // ***********************************
    // :: 16.0 Jarallax Active Code
    // ***********************************
    if ($.fn.jarallax) {
        $('.jarallax').jarallax({
            speed: 0.2
        });
    }
	
    // ***********************************
    // :: 17.0 Scrollup Active Code
    // ***********************************
    if ($.fn.scrollUp) {
        mona_window.scrollUp({
            scrollSpeed: 2000,
            scrollText: ''
        });
    }

})(jQuery);