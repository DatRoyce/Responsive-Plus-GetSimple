(function($) {
	"use strict";
	/*	Tooltip
	/*----------------------------------------------------*/
	$("[data-toggle='tooltip']").tooltip();
	
	/*	Popover
	/*----------------------------------------------------*/
	$("[data-toggle='popover']").popover();
	

	/*	Fixed Navigation
	/*----------------------------------------------------*/
	$(window).scroll(function(){
        if ($(this).scrollTop() > 40) {
            $('#top').addClass('menu-fixed animated fadeInDown');
        } else {
			$('#top').removeClass('menu-fixed animated fadeInDown');
        }
    });
	
	/* Modal Effects
	/*----------------------------------------------------*/
	$('.modal').on('shown.bs.modal', function (e) {
		var effect  = $(this).data("effect");
		if(effect) {
			$(this).find('.modal-content').addClass('animated ' + effect + '');
		} else {
			$(this).find('.modal-content').addClass('animated fadeIn');
		}
	});

	$('.modal').on('hidden.bs.modal', function (e) {
		var effect  = $(this).data("effect");
		if(effect) {
			$(this).find('.modal-content').removeClass('animated ' + effect + '');
		} else {
			$(this).find('.modal-content').removeClass('animated fadeIn');
		}
	});
	
	
	/* Responsive Navigation
	/*----------------------------------------------------*/
	$('.bar').click(function() {		
		$('nav').toggleClass('animated fadeIn show');
		$('nav ul').first().toggleClass('show');
	});
	
	/*	Dropdown Navigation
	/*----------------------------------------------------*/
	$('nav li.dropdown').hover(function() {			
		$(this).find('.dropdown-menu').stop(true, true).show;
		$(this).addClass('open');
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).hide;
		$(this).removeClass('open');
	});	
	
	$('nav .dropdown-submenu').hover(function() {			
		$(this).addClass('open');
	}, function() {
		$(this).removeClass('open');
	});	
	
	/*	jCarousel
	/*----------------------------------------------------*/
	$(function() {
		var jcarousel = $('.video-tab .jcarousel');

        jcarousel.jcarousel({
            wrap: 'circular'
        });

        $('.video-tab .left')
            .jcarouselControl({
                target: '-=1'
            });

        $('.video-tab .right')
            .jcarouselControl({
                target: '+=1'
            });
    });
	
	$(function() {
        var jcarousel = $('.carousel-tab .jcarousel');

        jcarousel.jcarousel({
                wrap: 'circular'
            });

		jcarousel.jcarouselAutoscroll({
			autostart: true
		});	
		
        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
    });
})(jQuery);