var main=function(){
	$('.menu-click').click(function(){
		$('.menu').animate({
		left: '0px'
		},200);
		$('body').animate({
		left: '185px'
		},200);
	});
	$('.icon-close').click(function(){
		$('.menu').animate({
		left: '-185px'
		},200);
		$('body').animate({
		left: '0px'
		},200);
	});

	$('.contact-click2').click(function(){
		$('.contact-page').animate({
			bottom: '0px'
		},200);
	});

	$('.contact-click1').click(function(){
		$('.menu').animate({
		left: '-185px'
		},200);
		$('body').animate({
		left: '0px'
		},200);

		$('.contact-page').animate({
			bottom: '0px'
		},200);
	});

	$('.contact-close').click(function(){
		$('.contact-page').animate({
			bottom: '-30%'
		},200);
	});

	$('.arrow-next').click(function(){
        var currentSlide = $('.active-slide');
        var nextSlide = currentSlide.next();
        var currentDot = $('.active-dot');
        var nextDot = currentDot.next();
        if(nextSlide.length==0){
            nextSlide = $('.slide').first();
            nextDot = $('.dot').first();
        }
        $(currentSlide).fadeOut(300).removeClass('active-slide');
        $(nextSlide).fadeIn(300).addClass('active-slide');
        $(currentDot).removeClass('active-dot');
        $(nextDot).addClass('active-dot');
    });
    $('.arrow-prev').click(function(){
        var currentSlide = $('.active-slide');
        var prevSlide = currentSlide.prev();
        var currentDot = $('.active-dot');
        var prevDot = currentDot.prev();
        if(prevSlide.length==0){
            prevSlide = $('.slide').last();
            prevDot = $('.dot').last();
        }
        $(currentSlide).fadeOut(300).removeClass('active-slide');
        $(prevSlide).fadeIn(300).addClass('active-slide');
        $(currentDot).removeClass('active-dot');
        $(prevDot).addClass('active-dot');
    });
};

$(document).ready(main);