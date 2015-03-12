var main=function(){
        $('.fadeTwo').delay(1500).animate({
             opacity: 1
        }, 700);
        $('.fadeOne').delay(2200).animate({
             opacity: 1
        }, 700);
        $('.fadeThree').delay(2900).animate({
             opacity: 1
        }, 700);
        $('.menu-click').click(function(){
            var menuHeight = $('.wrapper').width();
            if(menuHeight>=768){
                $('.menu').animate({
                    top: '0px'
                },200);
                $('.wrapper').animate({
                top: '40px'
                },200);
            }else{
                $('.menu').animate({
                    top: '0px'
                },200);
                $('.wrapper').animate({
                    top: '275px'
                },200);
            }
        });
        $('.close-click').click(function(){
            var menuHeight = $('.wrapper').width();
            if(menuHeight>=768){
                $('.menu').animate({
                    top: '-275px'
                },200);
                $('.wrapper').animate({
                    top: '0px'
                },200);
            }else{
                $('.menu').animate({
                    top: '-275px'
                },200);
                $('.wrapper').animate({
                    top: '0px'
                },200);
            }
        });
//Project Slides Control
        $('.arrow-next').click(function(){
            var currentSlide = $('.active-slide');
            var nextSlide = currentSlide.next();
            var currentDot = $('.active-dot');
            var nextDot = currentDot.next();
            if(nextSlide.length==0){
                nextSlide = $('.slide').first();
                nextDot = $('.dot').first();
            }
            $(currentSlide).fadeOut(1).removeClass('active-slide');
            $(nextSlide).fadeIn(1000).addClass('active-slide');
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
            $(currentSlide).fadeOut(1).removeClass('active-slide');
            $(prevSlide).fadeIn(1000).addClass('active-slide');
            $(currentDot).removeClass('active-dot');
            $(prevDot).addClass('active-dot');
        });

};

$(document).ready(main);