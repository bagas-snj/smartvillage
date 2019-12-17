/*
https://themeforest.net/user/coodiv
*/

$(document).ready(function() {
           $('[data-toggle="tooltip"]').tooltip();
		   new WOW().init();
		   $("#pageloeadacc").delay(1200).fadeOut(600);
		   
		   $('.counter').counterUp({
                delay: 10,
                time: 3000
            });
			
			$('#rootwizard').bootstrapWizard();
			
			$('.fadeOut').owlCarousel({
                items: 1,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                loop: true,
                margin: 10,
                loop: true,
                margin: 10,
                autoplay: false,
                autoplayTimeout: 4000,
                nav: true,
                autoplayHoverPause: true
            });
			
			if (window.matchMedia("(min-width: 992px)").matches) {

                $(".dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                        $(this).toggleClass('open');
                    }
                );
            };
			
			
			 $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 500) {
                $(".top-header-nav-cs").addClass("top-header-fixed");
            } else {
                $(".top-header-nav-cs").removeClass("top-header-fixed");
            };

            if (scroll <= 600) {
                $(".top-header-fixed").addClass("top-header-fixed-btom0");
            } else {
                $(".top-header-fixed").removeClass("top-header-fixed-btom0");
            }

        });
		
		
		$('body').append('<div id="toTop" class="btn"><span class="fa fa-chevron-up"></span></div>');
            $(window).scroll(function() {
                if ($(this).scrollTop() != 0) {
                    $('#toTop').fadeIn();
                } else {
                    $('#toTop').fadeOut();
                }
            });
            $('#toTop').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
			
			
            $('#navbarSideButton').on('click', function() {
                $('#navbarSide').addClass('reveal');
                $('#navbarSideButton').addClass('revrs-brnnrml');
                $('.overlay').show();
            });

            $('.overlay').on('click', function() {
                $('#navbarSide').removeClass('reveal');
                $('#navbarSideButton').removeClass('revrs-brnnrml');
                $('.overlay').hide();
            });
			

			$(".tab-one-cklcok a").mouseenter(function() {
		$(".tab-content-hover").hide();
		$(".tab-one-cklcok a").removeClass('ctive-clod-sr');					
		$(this).addClass("ctive-clod-sr");					
		var selected_tab = $(this).attr("href");
		$(selected_tab).stop().fadeIn();
		return false;
	});
	
	
    $('#header-indx-pg').css('height', $(window).height()+'px');

		   
});
		
		